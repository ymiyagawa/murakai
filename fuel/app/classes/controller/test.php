<?php

class Controller_Test extends Controller {

	public function action_index()
	{
		echo 'Hello World!';
	}
	
	public function action_buddy($name = 'buddy')
	{
		$this->response->body = View::forge(
			'hello', array('name' => $name)
		);
	}
}