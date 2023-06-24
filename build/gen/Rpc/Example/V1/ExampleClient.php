<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Rpc\Example\V1;

/**
 */
class ExampleClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Rpc\Example\V1\MyExampleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MyExample(\Rpc\Example\V1\MyExampleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/rpc.example.v1.Example/MyExample',
        $argument,
        ['\Rpc\Example\V1\MyExampleResponse', 'decode'],
        $metadata, $options);
    }

}
