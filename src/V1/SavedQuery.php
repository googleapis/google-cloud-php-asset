<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A saved query which can be shared with others or used later.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.SavedQuery</code>
 */
class SavedQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the saved query. The format must be:
     * * projects/project_number/savedQueries/saved_query_id
     * * folders/folder_number/savedQueries/saved_query_id
     * * organizations/organization_number/savedQueries/saved_query_id
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The description of this saved query. This value should be fewer than 255
     * characters.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * Output only. The create time of this saved query.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The account's email address who has created this saved query.
     *
     * Generated from protobuf field <code>string creator = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $creator = '';
    /**
     * Output only. The last update time of this saved query.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $last_update_time = null;
    /**
     * Output only. The account's email address who has updated this saved query
     * most recently.
     *
     * Generated from protobuf field <code>string last_updater = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $last_updater = '';
    /**
     * Labels applied on the resource.
     * This value should not contain more than 10 entries. The key and value of
     * each entry must be non-empty and fewer than 64 characters.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     */
    private $labels;
    /**
     * The query content.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.SavedQuery.QueryContent content = 8;</code>
     */
    protected $content = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the saved query. The format must be:
     *           * projects/project_number/savedQueries/saved_query_id
     *           * folders/folder_number/savedQueries/saved_query_id
     *           * organizations/organization_number/savedQueries/saved_query_id
     *     @type string $description
     *           The description of this saved query. This value should be fewer than 255
     *           characters.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The create time of this saved query.
     *     @type string $creator
     *           Output only. The account's email address who has created this saved query.
     *     @type \Google\Protobuf\Timestamp $last_update_time
     *           Output only. The last update time of this saved query.
     *     @type string $last_updater
     *           Output only. The account's email address who has updated this saved query
     *           most recently.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels applied on the resource.
     *           This value should not contain more than 10 entries. The key and value of
     *           each entry must be non-empty and fewer than 64 characters.
     *     @type \Google\Cloud\Asset\V1\SavedQuery\QueryContent $content
     *           The query content.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the saved query. The format must be:
     * * projects/project_number/savedQueries/saved_query_id
     * * folders/folder_number/savedQueries/saved_query_id
     * * organizations/organization_number/savedQueries/saved_query_id
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the saved query. The format must be:
     * * projects/project_number/savedQueries/saved_query_id
     * * folders/folder_number/savedQueries/saved_query_id
     * * organizations/organization_number/savedQueries/saved_query_id
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The description of this saved query. This value should be fewer than 255
     * characters.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of this saved query. This value should be fewer than 255
     * characters.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. The create time of this saved query.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The create time of this saved query.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The account's email address who has created this saved query.
     *
     * Generated from protobuf field <code>string creator = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Output only. The account's email address who has created this saved query.
     *
     * Generated from protobuf field <code>string creator = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCreator($var)
    {
        GPBUtil::checkString($var, True);
        $this->creator = $var;

        return $this;
    }

    /**
     * Output only. The last update time of this saved query.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastUpdateTime()
    {
        return $this->last_update_time;
    }

    public function hasLastUpdateTime()
    {
        return isset($this->last_update_time);
    }

    public function clearLastUpdateTime()
    {
        unset($this->last_update_time);
    }

    /**
     * Output only. The last update time of this saved query.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_update_time = $var;

        return $this;
    }

    /**
     * Output only. The account's email address who has updated this saved query
     * most recently.
     *
     * Generated from protobuf field <code>string last_updater = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLastUpdater()
    {
        return $this->last_updater;
    }

    /**
     * Output only. The account's email address who has updated this saved query
     * most recently.
     *
     * Generated from protobuf field <code>string last_updater = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLastUpdater($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_updater = $var;

        return $this;
    }

    /**
     * Labels applied on the resource.
     * This value should not contain more than 10 entries. The key and value of
     * each entry must be non-empty and fewer than 64 characters.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels applied on the resource.
     * This value should not contain more than 10 entries. The key and value of
     * each entry must be non-empty and fewer than 64 characters.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * The query content.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.SavedQuery.QueryContent content = 8;</code>
     * @return \Google\Cloud\Asset\V1\SavedQuery\QueryContent|null
     */
    public function getContent()
    {
        return $this->content;
    }

    public function hasContent()
    {
        return isset($this->content);
    }

    public function clearContent()
    {
        unset($this->content);
    }

    /**
     * The query content.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.SavedQuery.QueryContent content = 8;</code>
     * @param \Google\Cloud\Asset\V1\SavedQuery\QueryContent $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\SavedQuery\QueryContent::class);
        $this->content = $var;

        return $this;
    }

}

