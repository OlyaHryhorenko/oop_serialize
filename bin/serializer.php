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

$test = (object) array('this'=> 'that', 'whom'=> 'who');
$new_serialize = new Serializer(new App\YAMLSerialier( $test));
print_r($new_serialize->serialize());
