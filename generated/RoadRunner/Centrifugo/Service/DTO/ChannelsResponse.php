<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: service.proto

namespace RoadRunner\Centrifugo\Service\DTO;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.ChannelsResponse</code>
 */
class ChannelsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.Error error = 1;</code>
     */
    protected $error = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.ChannelsResult result = 2;</code>
     */
    protected $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RoadRunner\Centrifugo\Service\DTO\Error $error
     *     @type \RoadRunner\Centrifugo\Service\DTO\ChannelsResult $result
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.Error error = 1;</code>
     * @return \RoadRunner\Centrifugo\Service\DTO\Error
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.Error error = 1;</code>
     * @param \RoadRunner\Centrifugo\Service\DTO\Error $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugo\Service\DTO\Error::class);
        $this->error = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.ChannelsResult result = 2;</code>
     * @return \RoadRunner\Centrifugo\Service\DTO\ChannelsResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.ChannelsResult result = 2;</code>
     * @param \RoadRunner\Centrifugo\Service\DTO\ChannelsResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugo\Service\DTO\ChannelsResult::class);
        $this->result = $var;

        return $this;
    }

}

