<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: inbox.proto

namespace Inbox;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>inbox.BatchAddRequest</code>
 */
class BatchAddRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .inbox.AddInboxData data = 1;</code>
     */
    private $data;
    /**
     * Generated from protobuf field <code>int64 uid = 2;</code>
     */
    protected $uid = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Inbox\AddInboxData[]|\Google\Protobuf\Internal\RepeatedField $data
     *     @type int|string $uid
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Inbox::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .inbox.AddInboxData data = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>repeated .inbox.AddInboxData data = 1;</code>
     * @param \Inbox\AddInboxData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Inbox\AddInboxData::class);
        $this->data = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 uid = 2;</code>
     * @return int|string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>int64 uid = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkInt64($var);
        $this->uid = $var;

        return $this;
    }

}

