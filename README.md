Serializer 
===============

The utility to serialize objects to XML, JSON, YAML format

Installation
------------

```bash
$ composer create-project olya-hryhorenko/oop_serialize
```

Usage
------------

Example of implementing library 
```php
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
```

