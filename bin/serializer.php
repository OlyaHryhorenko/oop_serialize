#!/usr/bin/env php
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019-10-15
 * Time: 22:30
 */
require_once __DIR__ . '/../vendor/autoload.php';


use App\Serializer;
use App\JSONSerializer;
use App\XMLSerializer;
use App\YAMLSerialier;

/**
 * test array
 */
$test = (object) array('this'=> 'that', 'whom'=> 'who');

$new_yaml_serialize = new Serializer(new YAMLSerialier( $test));
echo 'YAML string '.$new_yaml_serialize->serialize();

$new_xml_serialize = new Serializer(new XMLSerializer($test));
echo 'XML serialize '.$new_xml_serialize->serialize();

$new_json_serialize = new Serializer(new JSONSerializer($test));
echo 'JSON serialize '.$new_json_serialize->serialize();