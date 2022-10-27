<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proxy.proto

namespace RoadRunner\Centrifugo\DTO;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.proxy.RefreshResult</code>
 */
class RefreshResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool expired = 1;</code>
     */
    protected $expired = false;
    /**
     * Generated from protobuf field <code>int64 expire_at = 2;</code>
     */
    protected $expire_at = 0;
    /**
     * Generated from protobuf field <code>bytes info = 3;</code>
     */
    protected $info = '';
    /**
     * Generated from protobuf field <code>string b64info = 4;</code>
     */
    protected $b64info = '';
    /**
     * Generated from protobuf field <code>bytes meta = 5;</code>
     */
    protected $meta = '';
    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.proxy.ChannelsCapability caps = 6;</code>
     */
    private $caps;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $expired
     *     @type int|string $expire_at
     *     @type string $info
     *     @type string $b64info
     *     @type string $meta
     *     @type \RoadRunner\Centrifugo\DTO\ChannelsCapability[]|\Google\Protobuf\Internal\RepeatedField $caps
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proxy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool expired = 1;</code>
     * @return bool
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * Generated from protobuf field <code>bool expired = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setExpired($var)
    {
        GPBUtil::checkBool($var);
        $this->expired = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 expire_at = 2;</code>
     * @return int|string
     */
    public function getExpireAt()
    {
        return $this->expire_at;
    }

    /**
     * Generated from protobuf field <code>int64 expire_at = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpireAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->expire_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes info = 3;</code>
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Generated from protobuf field <code>bytes info = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setInfo($var)
    {
        GPBUtil::checkString($var, False);
        $this->info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string b64info = 4;</code>
     * @return string
     */
    public function getB64Info()
    {
        return $this->b64info;
    }

    /**
     * Generated from protobuf field <code>string b64info = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setB64Info($var)
    {
        GPBUtil::checkString($var, True);
        $this->b64info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes meta = 5;</code>
     * @return string
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Generated from protobuf field <code>bytes meta = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setMeta($var)
    {
        GPBUtil::checkString($var, False);
        $this->meta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.proxy.ChannelsCapability caps = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCaps()
    {
        return $this->caps;
    }

    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.proxy.ChannelsCapability caps = 6;</code>
     * @param \RoadRunner\Centrifugo\DTO\ChannelsCapability[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCaps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RoadRunner\Centrifugo\DTO\ChannelsCapability::class);
        $this->caps = $arr;

        return $this;
    }

}

