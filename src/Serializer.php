<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019-10-15
 * Time: 22:21
 */

namespace App;


class Serializer {

	private $serialize;


	public function serialize(SerializeInterface $serialize) {
		$this->serialize = $serialize;
		return $this->serialize->serialize();
	}
}

