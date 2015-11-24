<?php
class restful{

	private $_type = 'GET';
	private $_data = NULL;

	public function __construct(){
		self::_require_type();
		self::_data();
		echo '[V'.$_SERVER['HTTP_VERSION'].']';
		$_type = '_'.$this->_type;
		if(method_exists($this,$_type)){
			$this->$_type();
		}else{
			echo 'Request Error.';
		}
		echo print_r($this->_data,1);
	}

	public function _require_type(){
		$this->_type = strtolower($_SERVER['REQUEST_METHOD']?$_SERVER['REQUEST_METHOD']:'GET');
	}

	public function _get(){
		echo 'This is GET Request.';
	}

	public function _post(){
		echo 'This is POST Request.';
	}

	public function _put(){
		echo 'This is PUT Request.';
	}

	public function _delete(){
		echo 'This is DELETE Request.';
	}

	public function _patch(){
		echo 'This is PATCH Request.';
	}

	public function _data(){
		//$HTTP_RAW_POST_DATA
		$this->_data = file_get_contents('php://input', 'r');
	}

}

 //restful::_require_type();

 $restful = new restful();

 $restful->_require_type();