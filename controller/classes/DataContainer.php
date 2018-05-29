<?php
/**
 * Created by PhpStorm.
 * User: Sébastien
 * Date: 2018-05-28
 * Time: 11:09 PM
 */

class DataContainer {
	
	private $date;
	private $time;
	private $client;
	private $description;
	
	
	/**
	 * @return mixed
	 */
	public
	function getDate() {
		return $this->date;
	}
	
	/**
	 * @param mixed $date
	 */
	public
	function setDate($date) {
		$this->date = $date;
	}
	
	/**
	 * @return mixed
	 */
	public
	function getTime() {
		return $this->time;
	}
	
	/**
	 * @param mixed $time
	 */
	public
	function setTime($time) {
		$this->time = $time;
	}
	
	/**
	 * @return mixed
	 */
	public
	function getClient() {
		return $this->client;
	}
	
	/**
	 * @param mixed $client
	 */
	public
	function setClient($client) {
		$this->client = $client;
	}
	
	/**
	 * @return mixed
	 */
	public
	function getDescription() {
		return $this->description;
	}
	
	/**
	 * @param mixed $description
	 */
	public
	function setDescription($description) {
		$this->description = $description;
	}
}