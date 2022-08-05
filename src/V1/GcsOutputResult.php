<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Cloud Storage output result.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.GcsOutputResult</code>
 */
class GcsOutputResult extends \Google\Protobuf\Internal\Message
{
    /**
     * List of uris of the Cloud Storage objects. Example:
     * "gs://bucket_name/object_name".
     *
     * Generated from protobuf field <code>repeated string uris = 1;</code>
     */
    private $uris;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $uris
     *           List of uris of the Cloud Storage objects. Example:
     *           "gs://bucket_name/object_name".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of uris of the Cloud Storage objects. Example:
     * "gs://bucket_name/object_name".
     *
     * Generated from protobuf field <code>repeated string uris = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUris()
    {
        return $this->uris;
    }

    /**
     * List of uris of the Cloud Storage objects. Example:
     * "gs://bucket_name/object_name".
     *
     * Generated from protobuf field <code>repeated string uris = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->uris = $arr;

        return $this;
    }

}

