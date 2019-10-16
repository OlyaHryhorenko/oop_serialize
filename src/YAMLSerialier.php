<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019-10-15
 * Time: 23:42
 */

namespace App;

use Symfony\Component\Serializer\Serializer;


class YAMLSerialier implements Serialize {

	public $object;

	public function __construct(object $obj) {
		$this->object = $obj;
	}

	public function serialize() {
		$serialize = new Serializer();
		return $serialize->serialize($this->object, 'yaml');
	}

}