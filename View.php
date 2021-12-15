<?php

namespace View;

class View
{
	public $html;
	public function __construct($cookie)
	{
		if (session_status() == 1)
		{
			session_start();
		}
	
		$pageColor = isset($cookie['page']) ? $cookie['page'] : '';
		$fontColor = isset($cookie['font-color']) ? $cookie['font-color'] : '';
		$fontType = isset($cookie['font-type']) ? $cookie['font-type'] : '';
		ob_flush();
		include($_SERVER['DOCUMENT_ROOT'] . '/psw/Views/Header.view.php');
		$this->html = ob_get_clean();
	}


	public function render() {
		echo $this->html;
	}
}
