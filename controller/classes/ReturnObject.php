<?php
/**
 * Created by PhpStorm.
 * User: Sébastien
 * Date: 2018-05-19
 * Time: 10:21 PM
 */

class ReturnObject	implements JsonSerializable {

	private $status;
	private $message;
	
	/**
	 * @return mixed
	 */
	public 	function getStatus() {
		return $this->status;
	}
	
	/**
	 * @param mixed $status
	 */
	public	function setStatus($status) {
		$this->status = $status;
	}
	
	/**
	 * @return mixed
	 */
	public	function getMessage() {
		return $this->message;
	}
	
	/**
	 * @param mixed $message
	 */
	public	function setMessage($message) {
		$this->message = $message;
	}
	
	public	function jsonSerialize() {
		return array(
			'status' => $this->status,
			'message' => $this->message
		);
	}
	

}