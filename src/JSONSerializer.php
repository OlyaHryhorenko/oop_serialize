<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019-10-15
 * Time: 22:21
 */

namespace App;


class JSONSerializer  implements SerializeInterface {

	public $object;

	public function __construct(object $obj) {
		$this->object = $obj;
	}

	public function serialize() {
		return \json_encode($this->object);
	}

}