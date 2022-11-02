<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: service.proto

namespace RoadRunner\Centrifugo\Service\DTO;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.ChannelContext</code>
 */
class ChannelContext extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 source = 1;</code>
     */
    protected $source = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $source
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 source = 1;</code>
     * @return int
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Generated from protobuf field <code>uint32 source = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkUint32($var);
        $this->source = $var;

        return $this;
    }

}

