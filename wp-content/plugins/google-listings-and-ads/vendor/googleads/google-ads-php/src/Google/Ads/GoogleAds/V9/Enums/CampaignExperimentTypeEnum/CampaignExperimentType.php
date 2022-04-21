<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/enums/campaign_experiment_type.proto

namespace Google\Ads\GoogleAds\V9\Enums\CampaignExperimentTypeEnum;

use UnexpectedValueException;

/**
 * Indicates if this campaign is a normal campaign,
 * a draft campaign, or an experiment campaign.
 *
 * Protobuf type <code>google.ads.googleads.v9.enums.CampaignExperimentTypeEnum.CampaignExperimentType</code>
 */
class CampaignExperimentType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * This is a regular campaign.
     *
     * Generated from protobuf enum <code>BASE = 2;</code>
     */
    const BASE = 2;
    /**
     * This is a draft version of a campaign.
     * It has some modifications from a base campaign,
     * but it does not serve or accrue metrics.
     *
     * Generated from protobuf enum <code>DRAFT = 3;</code>
     */
    const DRAFT = 3;
    /**
     * This is an experiment version of a campaign.
     * It has some modifications from a base campaign,
     * and a percentage of traffic is being diverted
     * from the BASE campaign to this experiment campaign.
     *
     * Generated from protobuf enum <code>EXPERIMENT = 4;</code>
     */
    const EXPERIMENT = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::BASE => 'BASE',
        self::DRAFT => 'DRAFT',
        self::EXPERIMENT => 'EXPERIMENT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CampaignExperimentType::class, \Google\Ads\GoogleAds\V9\Enums\CampaignExperimentTypeEnum_CampaignExperimentType::class);

