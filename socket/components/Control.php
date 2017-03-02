<?php
namespace socket\components;

use Yii;
use Tool;
use Socket;

class Control extends \yii\console\Controller {
   	
	public $socket;
	public $client;
	public $data;
	public $params;

	public function init () {
		parent::init();

		$this->socket = Socket::$ins->socket;
		$this->client = Socket::$ins->client;
		$this->data = Socket::$ins->data;
		$this->params = Socket::$ins->params;

	}

}
