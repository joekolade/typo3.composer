<?php
namespace SCW\TestTypo3\Deployment\Application;

use SCW\TestTypo3\Deployment\Task\LocalInstallTask;
use TYPO3\Surf\Domain\Model\Deployment;
use TYPO3\Surf\Domain\Model\Workflow;
use TYPO3\Surf\Task\Package\GitTask;
use TYPO3\Surf\Task\Php\WebOpcacheResetCreateScriptTask;
use TYPO3\Surf\Task\Php\WebOpcacheResetExecuteTask;
use TYPO3\Surf\Task\TYPO3\CMS\CompareDatabaseTask;
use TYPO3\Surf\Task\TYPO3\CMS\FlushCachesTask;
use TYPO3\Surf\Task\TYPO3\CMS\SetUpExtensionsTask;

class TestTypo3Application extends \TYPO3\Surf\Application\TYPO3\CMS
{
   /**
    * @param string $deploymentPath
    * @param string $baseUrl Used as an required option in the WebOpcacheResetExecuteTask
    * @throws \Exception
    */
    public function __construct($deploymentPath, $baseUrl)
    {
        if (!$deploymentPath) {
            throw new \Exception(
                'Deployment path was not set in Surf deplomyent configuration file',
                1479394104502
            );
        }

        if (!$baseUrl) {
            throw new \Exception(
                'Base URL was not set in Surf deplomyent configuration file',
                1479882363615
            );
        }

        parent::__construct('TestTypo3sWeb');

        $this->setOptionDeploymentSource();
        $this->setOption('keepReleases', 5);
        $this->setOption('repositoryUrl', 'git@github.com:joekolade/typo3.composer.git');
        $this->setOption('composerCommandPath', 'composer');
        $this->setOption('applicationRootDirectory', '/kunden/333215_89231/webseiten/typo3/surf.joekola.de/');
        // "baseUrl" is a required option of WebOpcacheResetExecuteTask
        $this->setOption('baseUrl', $baseUrl);
        // "databaseCompareMode" is used by the CompareDatabaseTask
        $this->setOption('databaseCompareMode', '*.add');
        $this->setOption(
            'rsyncExcludes',
            [
                '.DS_Store',
                '/.editorconfig',
                '/.git',
                '/.gitignore',
                '/Build',
                '/build.xml',
                '/Web/composer.json',
                '/Web/composer.lock',
            ]
        );
        // The folders "fileadmin", "uploads" and "AdditionalConfiguration" must not be part
        // of your repository as they contain user generated content or contain node specific
        // settings in the "AdditionalConfiguration". 
        $this->setSymlinks(
            [
                'Web/fileadmin' => '../../../shared/Data/fileadmin',
                'Web/uploads' => '../../../shared/Data/uploads',
                'Web/typo3conf/AdditionalConfiguration' => '../../../../shared/Configuration/AdditionalConfiguration/',
            ]
        );

        $this->setDeploymentPath($deploymentPath);
    }

    /**
     * @param Workflow $workflow
     * @param Deployment $deployment
     */
    public function registerTasks(Workflow $workflow, Deployment $deployment)
    {
        parent::registerTasks($workflow, $deployment);
        $this->defineTasks($workflow, $deployment);
        $workflow->addTask(WebOpcacheResetCreateScriptTask::class, 'package', $this);
        $workflow->addTask('SCW\\TestTypo3\\DefinedTask\\FixFolderStructure', 'migrate', $this);
        $workflow->addTask(WebOpcacheResetExecuteTask::class, 'switch', $this);
        $workflow->addTask('SCW\\TestTypo3\\DefinedTask\\LanguageUpdate', 'finalize', $this);
    }

    /**
     * Define the individual tasks
     *
     * All these tasks require the typo3_console. Please install it with your projects composer json.
     *
     * @param Workflow $workflow
     * @return void
     */

    private function defineTasks(Workflow $workflow)
    {
        $workflow->defineTask(
            'SCW\\TestTypo3\\DefinedTask\\LanguageUpdate',
            \TYPO3\Surf\Task\ShellTask::class,
            ['command' => 'php {releasePath}/Web/vendor/bin/typo3cms language:update',]
        );

        $workflow->defineTask(
            'SCW\\TestTypo3\\DefinedTask\\FixFolderStructure',
            \TYPO3\Surf\Task\ShellTask::class,
            ['command' => 'php {releasePath}/Web/vendor/bin/typo3cms install:fixfolderstructure',]
        );
    }

    /**
     * This method checks whether there is a correct deployment source specified. If not, it throws an exception
     * TODO: This method is not project specific and
     * may be put into something like a Library of Surf deployment related
     * classes in the future.
     *
     * @throws \Exception
     * @return void
     */
     protected function setOptionDeploymentSource()
     {
         $source = getenv('DEPLOYMENT_SOURCE');

         if (!is_string($source)) {
             throw new \Exception('DEPLOYMENT_SOURCE environment variable is missing. Pattern: "DEPLOYMENT_SOURCE=branch|tag|sha1:foobar"', 1479391741322);
         }

         $sourceArray = explode(':', $source);

         if (
             count($sourceArray) === 2
             &&
             in_array(
                 $sourceArray[0],
                 ['sha1', 'branch', 'tag']
             )
         ) {
             $this->setOption($sourceArray[0], $sourceArray[1]);
         } else {
             throw new \InvalidArgumentException(
                 'DEPLOYMENT_SOURCE environment variable does not meet the mandatory pattern. Pattern: "DEPLOYMENT_SOURCE=branch|tag|sha1:foobar", 1479391747337',
                 1455797642
             );
         }
     }
}
