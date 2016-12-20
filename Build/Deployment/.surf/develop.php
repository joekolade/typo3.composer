<?php
use SCW\TestTypo3\Deployment\Application;
use SCW\TestTypo3\Deployment\Node;

$application = new TestTypo3Application(
    '/kunden/333215_89231/webseiten/typo3/surf.joekola.de',
    'http://surf.joekola.de'
);

$node = new TestTypo3Node();

$application->addNode($node);

/** @var \TYPO3\Surf\Domain\Model\Deployment $deployment */
$deployment->addApplication($application);
