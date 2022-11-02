<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: service.proto

namespace RoadRunner\Centrifugo\Service\DTO;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.ConnectionState</code>
 */
class ConnectionState extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<string, .centrifugal.centrifugo.api.ChannelContext> channels = 1;</code>
     */
    private $channels;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.ConnectionTokenInfo connection_token = 2;</code>
     */
    protected $connection_token = null;
    /**
     * Generated from protobuf field <code>map<string, .centrifugal.centrifugo.api.SubscriptionTokenInfo> subscription_tokens = 3;</code>
     */
    private $subscription_tokens;
    /**
     * Generated from protobuf field <code>bytes meta = 4;</code>
     */
    protected $meta = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $channels
     *     @type \RoadRunner\Centrifugo\Service\DTO\ConnectionTokenInfo $connection_token
     *     @type array|\Google\Protobuf\Internal\MapField $subscription_tokens
     *     @type string $meta
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<string, .centrifugal.centrifugo.api.ChannelContext> channels = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * Generated from protobuf field <code>map<string, .centrifugal.centrifugo.api.ChannelContext> channels = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setChannels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \RoadRunner\Centrifugo\Service\DTO\ChannelContext::class);
        $this->channels = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.ConnectionTokenInfo connection_token = 2;</code>
     * @return \RoadRunner\Centrifugo\Service\DTO\ConnectionTokenInfo
     */
    public function getConnectionToken()
    {
        return $this->connection_token;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.ConnectionTokenInfo connection_token = 2;</code>
     * @param \RoadRunner\Centrifugo\Service\DTO\ConnectionTokenInfo $var
     * @return $this
     */
    public function setConnectionToken($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugo\Service\DTO\ConnectionTokenInfo::class);
        $this->connection_token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .centrifugal.centrifugo.api.SubscriptionTokenInfo> subscription_tokens = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getSubscriptionTokens()
    {
        return $this->subscription_tokens;
    }

    /**
     * Generated from protobuf field <code>map<string, .centrifugal.centrifugo.api.SubscriptionTokenInfo> subscription_tokens = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setSubscriptionTokens($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \RoadRunner\Centrifugo\Service\DTO\SubscriptionTokenInfo::class);
        $this->subscription_tokens = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes meta = 4;</code>
     * @return string
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Generated from protobuf field <code>bytes meta = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMeta($var)
    {
        GPBUtil::checkString($var, False);
        $this->meta = $var;

        return $this;
    }

}

