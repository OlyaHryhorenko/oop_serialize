<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019-10-15
 * Time: 22:21
 */

namespace App;
use XML_Serializer;


class XMLSerializer implements SerializeInterface {

	public $object;

	public function __construct(object $obj) {
		$this->object = $obj;
	}

	public function serialize() {
		$options = array();
		$serializer = new XML_Serializer($options);
		$serializer->serialize($this->object);
		return $serializer->getSerializedData();
	}
}