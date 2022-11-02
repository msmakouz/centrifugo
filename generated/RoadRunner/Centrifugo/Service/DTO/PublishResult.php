<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: service.proto

namespace RoadRunner\Centrifugo\Service\DTO;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.PublishResult</code>
 */
class PublishResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 offset = 1;</code>
     */
    protected $offset = 0;
    /**
     * Generated from protobuf field <code>string epoch = 2;</code>
     */
    protected $epoch = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $offset
     *     @type string $epoch
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 offset = 1;</code>
     * @return int|string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Generated from protobuf field <code>uint64 offset = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkUint64($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string epoch = 2;</code>
     * @return string
     */
    public function getEpoch()
    {
        return $this->epoch;
    }

    /**
     * Generated from protobuf field <code>string epoch = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEpoch($var)
    {
        GPBUtil::checkString($var, True);
        $this->epoch = $var;

        return $this;
    }

}

