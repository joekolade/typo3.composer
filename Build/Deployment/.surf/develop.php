<?php
use SCW\TestTypo3\Deployment\Application\TestTypo3Application;
use SCW\TestTypo3\Deployment\Node\TestTypo3Node;

$application = new TestTypo3Application(
    '/kunden/333215_89231/webseiten/typo3/surf.joekola.de',
    'http://surf.joekola.de'
);

$node = new TestTypo3Node();

$application->addNode($node);

/** @var \TYPO3\Surf\Domain\Model\Deployment $deployment */
$deployment->addApplication($application);
