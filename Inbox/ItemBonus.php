<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: php/inbox.proto

namespace Inbox;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>inbox.ItemBonus</code>
 */
class ItemBonus extends \Google\Protobuf\Internal\Message
{
    /**
     *道具id
     *
     * Generated from protobuf field <code>int64 item_id = 1;</code>
     */
    protected $item_id = 0;
    /**
     *数量
     *
     * Generated from protobuf field <code>int64 count = 2;</code>
     */
    protected $count = 0;
    /**
     *类型
     *
     * Generated from protobuf field <code>string type = 3;</code>
     */
    protected $type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $item_id
     *          道具id
     *     @type int|string $count
     *          数量
     *     @type string $type
     *          类型
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Php\Inbox::initOnce();
        parent::__construct($data);
    }

    /**
     *道具id
     *
     * Generated from protobuf field <code>int64 item_id = 1;</code>
     * @return int|string
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     *道具id
     *
     * Generated from protobuf field <code>int64 item_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setItemId($var)
    {
        GPBUtil::checkInt64($var);
        $this->item_id = $var;

        return $this;
    }

    /**
     *数量
     *
     * Generated from protobuf field <code>int64 count = 2;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     *数量
     *
     * Generated from protobuf field <code>int64 count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

    /**
     *类型
     *
     * Generated from protobuf field <code>string type = 3;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *类型
     *
     * Generated from protobuf field <code>string type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

}
