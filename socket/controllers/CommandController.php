<?php
namespace socket\controllers;

use Yii;

class CommandController extends \socket\components\Control {


	public function actionExec () {
	
		\Socket::$ins->send($this->client, ['response' => 'Server Response']);

	}

}