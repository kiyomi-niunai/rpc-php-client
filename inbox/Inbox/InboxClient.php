<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Inbox;

/**
 */
class InboxClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Inbox\UIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function listData(\Inbox\UIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/inbox.Inbox/list',
        $argument,
        ['\Inbox\ListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Inbox\OperateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function operate(\Inbox\OperateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/inbox.Inbox/operate',
        $argument,
        ['\Inbox\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Inbox\AddRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add(\Inbox\AddRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/inbox.Inbox/add',
        $argument,
        ['\Inbox\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Inbox\BatchAddRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function batchAdd(\Inbox\BatchAddRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/inbox.Inbox/batchAdd',
        $argument,
        ['\Inbox\CommonResponse', 'decode'],
        $metadata, $options);
    }

}
