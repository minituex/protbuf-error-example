<?php

namespace Example;

use Google\Protobuf\Internal\MapFieldIter;
use Rpc\Example\V1\MyExampleResponse;

require_once __DIR__ . '/../vendor/autoload.php';

class test
{
    public function run()
    {
        echo 'start test' . PHP_EOL;

        $myResponse = [
            1 => 'my response',
            2 => 'my next response',
            3 => 'my last response'
        ];
        $exampleResponse = new MyExampleResponse();
        $exampleResponse->setMyResponse($myResponse);

        echo 'Response created - iterating over it now' . PHP_EOL;

        /** @var MapFieldIter $iterator */
        $iterator = $exampleResponse->getMyResponse()->getIterator();
        while (true) {
            $current = $iterator->current(); // with protobuf extension, this will break!
            $key = $iterator->key(); // with protobuf extension, this will break!
            if (empty($current)) {
                break;
            }
            $iterator->next();

            echo $key . PHP_EOL;
            echo $current . PHP_EOL;
        }

        echo "Success!" . PHP_EOL;
    }
}
(new test())->run();

