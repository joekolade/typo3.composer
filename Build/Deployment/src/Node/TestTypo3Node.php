<?php
  namespace SCW\TestTypo3\Deployment\Node;

  class TestTypo3Node extends \TYPO3\Surf\Domain\Model\Node
  {
     /**
      * @var array
      */
      protected $options = [
         'username' => 'ssh-333215-surf',
         'hostname' => 'joekola.de',
      ];

      public function __construct()
      {
         parent::__construct('Webserver for test purposes');
      }
   }
