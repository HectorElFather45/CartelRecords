<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/customer_service.proto

namespace Google\Ads\GoogleAds\V9\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for CreateCustomerClient mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.services.CreateCustomerClientResponse</code>
 */
class CreateCustomerClientResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the newly created customer client.
     *
     * Generated from protobuf field <code>string resource_name = 2;</code>
     */
    protected $resource_name = '';
    /**
     * Link for inviting user to access the created customer. Accessible to
     * allowlisted customers only.
     *
     * Generated from protobuf field <code>string invitation_link = 3;</code>
     */
    protected $invitation_link = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the newly created customer client.
     *     @type string $invitation_link
     *           Link for inviting user to access the created customer. Accessible to
     *           allowlisted customers only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Services\CustomerService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the newly created customer client.
     *
     * Generated from protobuf field <code>string resource_name = 2;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the newly created customer client.
     *
     * Generated from protobuf field <code>string resource_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Link for inviting user to access the created customer. Accessible to
     * allowlisted customers only.
     *
     * Generated from protobuf field <code>string invitation_link = 3;</code>
     * @return string
     */
    public function getInvitationLink()
    {
        return $this->invitation_link;
    }

    /**
     * Link for inviting user to access the created customer. Accessible to
     * allowlisted customers only.
     *
     * Generated from protobuf field <code>string invitation_link = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setInvitationLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->invitation_link = $var;

        return $this;
    }

}
