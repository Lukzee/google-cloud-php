<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/tags.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The template for an individual field within a tag template.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.TagTemplateField</code>
 */
class TagTemplateField extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the tag template field in URL format. Example:
     * * projects/{project_id}/locations/{location}/tagTemplates/{tag_template}/fields/{field}
     * Note that this TagTemplateField may not actually be stored in the location
     * in this name.
     *
     * Generated from protobuf field <code>string name = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * The display name for this field. Defaults to an empty string.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     */
    private $display_name = '';
    /**
     * Required. The type of value this tag field can contain.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.FieldType type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $type = null;
    /**
     * Whether this is a required field. Defaults to false.
     *
     * Generated from protobuf field <code>bool is_required = 3;</code>
     */
    private $is_required = false;
    /**
     * The order of this field with respect to other fields in this tag
     * template. For example, a higher value can indicate a more important field.
     * The value can be negative. Multiple fields can have the same order, and
     * field orders within a tag do not have to be sequential.
     *
     * Generated from protobuf field <code>int32 order = 5;</code>
     */
    private $order = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the tag template field in URL format. Example:
     *           * projects/{project_id}/locations/{location}/tagTemplates/{tag_template}/fields/{field}
     *           Note that this TagTemplateField may not actually be stored in the location
     *           in this name.
     *     @type string $display_name
     *           The display name for this field. Defaults to an empty string.
     *     @type \Google\Cloud\DataCatalog\V1\FieldType $type
     *           Required. The type of value this tag field can contain.
     *     @type bool $is_required
     *           Whether this is a required field. Defaults to false.
     *     @type int $order
     *           The order of this field with respect to other fields in this tag
     *           template. For example, a higher value can indicate a more important field.
     *           The value can be negative. Multiple fields can have the same order, and
     *           field orders within a tag do not have to be sequential.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Tags::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the tag template field in URL format. Example:
     * * projects/{project_id}/locations/{location}/tagTemplates/{tag_template}/fields/{field}
     * Note that this TagTemplateField may not actually be stored in the location
     * in this name.
     *
     * Generated from protobuf field <code>string name = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the tag template field in URL format. Example:
     * * projects/{project_id}/locations/{location}/tagTemplates/{tag_template}/fields/{field}
     * Note that this TagTemplateField may not actually be stored in the location
     * in this name.
     *
     * Generated from protobuf field <code>string name = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * The display name for this field. Defaults to an empty string.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The display name for this field. Defaults to an empty string.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Required. The type of value this tag field can contain.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.FieldType type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DataCatalog\V1\FieldType
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : null;
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * Required. The type of value this tag field can contain.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.FieldType type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DataCatalog\V1\FieldType $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\FieldType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Whether this is a required field. Defaults to false.
     *
     * Generated from protobuf field <code>bool is_required = 3;</code>
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->is_required;
    }

    /**
     * Whether this is a required field. Defaults to false.
     *
     * Generated from protobuf field <code>bool is_required = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->is_required = $var;

        return $this;
    }

    /**
     * The order of this field with respect to other fields in this tag
     * template. For example, a higher value can indicate a more important field.
     * The value can be negative. Multiple fields can have the same order, and
     * field orders within a tag do not have to be sequential.
     *
     * Generated from protobuf field <code>int32 order = 5;</code>
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * The order of this field with respect to other fields in this tag
     * template. For example, a higher value can indicate a more important field.
     * The value can be negative. Multiple fields can have the same order, and
     * field orders within a tag do not have to be sequential.
     *
     * Generated from protobuf field <code>int32 order = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setOrder($var)
    {
        GPBUtil::checkInt32($var);
        $this->order = $var;

        return $this;
    }

}

