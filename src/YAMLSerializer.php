<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019-10-15
 * Time: 23:42
 */

namespace App;

use Symfony\Component\Yaml\Yaml;


class YAMLSerializer implements SerializeInterface {

	public $object;

	public function __construct(object $obj) {
		$this->object = $obj;
	}

	public function serialize() {
		return Yaml::dump($this->object);
	}

}