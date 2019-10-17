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
use App\YAMLSerializer;

/**
 * test array
 */
$test = (object) array('this'=> 'that', 'whom'=> 'who');

$serializer = new Serializer();

echo 'YAML string '.$serializer->serialize(new YAMLSerializer( $test));

echo 'XML serialize '.$serializer->serialize(new XMLSerializer($test));

echo 'JSON serialize '.$serializer->serialize(new JSONSerializer($test));