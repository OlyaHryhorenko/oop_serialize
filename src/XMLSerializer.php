<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019-10-15
 * Time: 22:21
 */

namespace App;
use XML_Serializer;


class XMLSerializer implements Serialize {

	public $object;

	public function __construct(object $obj) {
		$this->object = $obj;
	}

	public function serialize() {
		$options = array(
			XML_SERIALIZER_OPTION_INDENT               => '    ',
			XML_SERIALIZER_OPTION_LINEBREAKS           => "\n",
			XML_SERIALIZER_OPTION_DEFAULT_TAG          => 'unnamedItem',
			XML_SERIALIZER_OPTION_SCALAR_AS_ATTRIBUTES => false,
			XML_SERIALIZER_OPTION_ATTRIBUTES_KEY       => '_attributes',
			XML_SERIALIZER_OPTION_CONTENT_KEY          => '_content'
		);
		$serializer = new XML_Serializer($options);
		$serializer->serialize($this->object);
		return $serializer->getSerializedData();
	}
}