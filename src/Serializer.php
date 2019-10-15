<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019-10-15
 * Time: 22:21
 */

namespace App;


class Serializer {

	/**
	 * @var Strategy The Context maintains a reference to one of the Strategy
	 * objects. The Context does not know the concrete class of a strategy. It
	 * should work with all strategies via the Strategy interface.
	 */
	private $serialize;

	/**
	 * Usually, the Context accepts a strategy through the constructor, but also
	 * provides a setter to change it at runtime.
	 */
	public function __construct(Serialize $serialize)
	{
		$this->serialize = $serialize;
	}


	/**
	 * Usually, the Context allows replacing a Strategy object at runtime.
	 */
	public function setStrategy(Serialize $serialize)
	{
		$this->serialize = $serialize;
	}
	public function serialize() {
		return $this->serialize->serialize();
	}
}

