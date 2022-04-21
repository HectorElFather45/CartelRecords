<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V9\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A responsive display ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.common.ResponsiveDisplayAdInfo</code>
 */
class ResponsiveDisplayAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Marketing images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 600x314 and the aspect ratio must
     * be 1.91:1 (+-1%). At least one `marketing_image` is required. Combined
     * with `square_marketing_images`, the maximum is 15.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdImageAsset marketing_images = 1;</code>
     */
    private $marketing_images;
    /**
     * Square marketing images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 300x300 and the aspect ratio must
     * be 1:1 (+-1%). At least one square `marketing_image` is required. Combined
     * with `marketing_images`, the maximum is 15.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdImageAsset square_marketing_images = 2;</code>
     */
    private $square_marketing_images;
    /**
     * Logo images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 512x128 and the aspect ratio must
     * be 4:1 (+-1%). Combined with `square_logo_images`, the maximum is 5.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdImageAsset logo_images = 3;</code>
     */
    private $logo_images;
    /**
     * Square logo images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 128x128 and the aspect ratio must
     * be 1:1 (+-1%). Combined with `square_logo_images`, the maximum is 5.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdImageAsset square_logo_images = 4;</code>
     */
    private $square_logo_images;
    /**
     * Short format headlines for the ad. The maximum length is 30 characters.
     * At least 1 and max 5 headlines can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdTextAsset headlines = 5;</code>
     */
    private $headlines;
    /**
     * A required long format headline. The maximum length is 90 characters.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.AdTextAsset long_headline = 6;</code>
     */
    protected $long_headline = null;
    /**
     * Descriptive texts for the ad. The maximum length is 90 characters. At
     * least 1 and max 5 headlines can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdTextAsset descriptions = 7;</code>
     */
    private $descriptions;
    /**
     * Optional YouTube videos for the ad. A maximum of 5 videos can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdVideoAsset youtube_videos = 8;</code>
     */
    private $youtube_videos;
    /**
     * The advertiser/brand name. Maximum display width is 25.
     *
     * Generated from protobuf field <code>optional string business_name = 17;</code>
     */
    protected $business_name = null;
    /**
     * The main color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of `main_color` and `accent_color` is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>optional string main_color = 18;</code>
     */
    protected $main_color = null;
    /**
     * The accent color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of `main_color` and `accent_color` is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>optional string accent_color = 19;</code>
     */
    protected $accent_color = null;
    /**
     * Advertiser's consent to allow flexible color. When true, the ad may be
     * served with different color if necessary. When false, the ad will be served
     * with the specified colors or a neutral color.
     * The default value is `true`.
     * Must be true if `main_color` and `accent_color` are not set.
     *
     * Generated from protobuf field <code>optional bool allow_flexible_color = 20;</code>
     */
    protected $allow_flexible_color = null;
    /**
     * The call-to-action text for the ad. Maximum display width is 30.
     *
     * Generated from protobuf field <code>optional string call_to_action_text = 21;</code>
     */
    protected $call_to_action_text = null;
    /**
     * Prefix before price. E.g. 'as low as'.
     *
     * Generated from protobuf field <code>optional string price_prefix = 22;</code>
     */
    protected $price_prefix = null;
    /**
     * Promotion text used for dynamic formats of responsive ads. For example
     * 'Free two-day shipping'.
     *
     * Generated from protobuf field <code>optional string promo_text = 23;</code>
     */
    protected $promo_text = null;
    /**
     * Specifies which format the ad will be served in. Default is ALL_FORMATS.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.DisplayAdFormatSettingEnum.DisplayAdFormatSetting format_setting = 16;</code>
     */
    protected $format_setting = 0;
    /**
     * Specification for various creative controls.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.ResponsiveDisplayAdControlSpec control_spec = 24;</code>
     */
    protected $control_spec = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V9\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $marketing_images
     *           Marketing images to be used in the ad. Valid image types are GIF,
     *           JPEG, and PNG. The minimum size is 600x314 and the aspect ratio must
     *           be 1.91:1 (+-1%). At least one `marketing_image` is required. Combined
     *           with `square_marketing_images`, the maximum is 15.
     *     @type \Google\Ads\GoogleAds\V9\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $square_marketing_images
     *           Square marketing images to be used in the ad. Valid image types are GIF,
     *           JPEG, and PNG. The minimum size is 300x300 and the aspect ratio must
     *           be 1:1 (+-1%). At least one square `marketing_image` is required. Combined
     *           with `marketing_images`, the maximum is 15.
     *     @type \Google\Ads\GoogleAds\V9\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $logo_images
     *           Logo images to be used in the ad. Valid image types are GIF,
     *           JPEG, and PNG. The minimum size is 512x128 and the aspect ratio must
     *           be 4:1 (+-1%). Combined with `square_logo_images`, the maximum is 5.
     *     @type \Google\Ads\GoogleAds\V9\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $square_logo_images
     *           Square logo images to be used in the ad. Valid image types are GIF,
     *           JPEG, and PNG. The minimum size is 128x128 and the aspect ratio must
     *           be 1:1 (+-1%). Combined with `square_logo_images`, the maximum is 5.
     *     @type \Google\Ads\GoogleAds\V9\Common\AdTextAsset[]|\Google\Protobuf\Internal\RepeatedField $headlines
     *           Short format headlines for the ad. The maximum length is 30 characters.
     *           At least 1 and max 5 headlines can be specified.
     *     @type \Google\Ads\GoogleAds\V9\Common\AdTextAsset $long_headline
     *           A required long format headline. The maximum length is 90 characters.
     *     @type \Google\Ads\GoogleAds\V9\Common\AdTextAsset[]|\Google\Protobuf\Internal\RepeatedField $descriptions
     *           Descriptive texts for the ad. The maximum length is 90 characters. At
     *           least 1 and max 5 headlines can be specified.
     *     @type \Google\Ads\GoogleAds\V9\Common\AdVideoAsset[]|\Google\Protobuf\Internal\RepeatedField $youtube_videos
     *           Optional YouTube videos for the ad. A maximum of 5 videos can be specified.
     *     @type string $business_name
     *           The advertiser/brand name. Maximum display width is 25.
     *     @type string $main_color
     *           The main color of the ad in hexadecimal, e.g. #ffffff for white.
     *           If one of `main_color` and `accent_color` is set, the other is required as
     *           well.
     *     @type string $accent_color
     *           The accent color of the ad in hexadecimal, e.g. #ffffff for white.
     *           If one of `main_color` and `accent_color` is set, the other is required as
     *           well.
     *     @type bool $allow_flexible_color
     *           Advertiser's consent to allow flexible color. When true, the ad may be
     *           served with different color if necessary. When false, the ad will be served
     *           with the specified colors or a neutral color.
     *           The default value is `true`.
     *           Must be true if `main_color` and `accent_color` are not set.
     *     @type string $call_to_action_text
     *           The call-to-action text for the ad. Maximum display width is 30.
     *     @type string $price_prefix
     *           Prefix before price. E.g. 'as low as'.
     *     @type string $promo_text
     *           Promotion text used for dynamic formats of responsive ads. For example
     *           'Free two-day shipping'.
     *     @type int $format_setting
     *           Specifies which format the ad will be served in. Default is ALL_FORMATS.
     *     @type \Google\Ads\GoogleAds\V9\Common\ResponsiveDisplayAdControlSpec $control_spec
     *           Specification for various creative controls.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * Marketing images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 600x314 and the aspect ratio must
     * be 1.91:1 (+-1%). At least one `marketing_image` is required. Combined
     * with `square_marketing_images`, the maximum is 15.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdImageAsset marketing_images = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMarketingImages()
    {
        return $this->marketing_images;
    }

    /**
     * Marketing images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 600x314 and the aspect ratio must
     * be 1.91:1 (+-1%). At least one `marketing_image` is required. Combined
     * with `square_marketing_images`, the maximum is 15.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdImageAsset marketing_images = 1;</code>
     * @param \Google\Ads\GoogleAds\V9\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMarketingImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V9\Common\AdImageAsset::class);
        $this->marketing_images = $arr;

        return $this;
    }

    /**
     * Square marketing images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 300x300 and the aspect ratio must
     * be 1:1 (+-1%). At least one square `marketing_image` is required. Combined
     * with `marketing_images`, the maximum is 15.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdImageAsset square_marketing_images = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSquareMarketingImages()
    {
        return $this->square_marketing_images;
    }

    /**
     * Square marketing images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 300x300 and the aspect ratio must
     * be 1:1 (+-1%). At least one square `marketing_image` is required. Combined
     * with `marketing_images`, the maximum is 15.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdImageAsset square_marketing_images = 2;</code>
     * @param \Google\Ads\GoogleAds\V9\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSquareMarketingImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V9\Common\AdImageAsset::class);
        $this->square_marketing_images = $arr;

        return $this;
    }

    /**
     * Logo images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 512x128 and the aspect ratio must
     * be 4:1 (+-1%). Combined with `square_logo_images`, the maximum is 5.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdImageAsset logo_images = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogoImages()
    {
        return $this->logo_images;
    }

    /**
     * Logo images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 512x128 and the aspect ratio must
     * be 4:1 (+-1%). Combined with `square_logo_images`, the maximum is 5.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdImageAsset logo_images = 3;</code>
     * @param \Google\Ads\GoogleAds\V9\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLogoImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V9\Common\AdImageAsset::class);
        $this->logo_images = $arr;

        return $this;
    }

    /**
     * Square logo images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 128x128 and the aspect ratio must
     * be 1:1 (+-1%). Combined with `square_logo_images`, the maximum is 5.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdImageAsset square_logo_images = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSquareLogoImages()
    {
        return $this->square_logo_images;
    }

    /**
     * Square logo images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 128x128 and the aspect ratio must
     * be 1:1 (+-1%). Combined with `square_logo_images`, the maximum is 5.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdImageAsset square_logo_images = 4;</code>
     * @param \Google\Ads\GoogleAds\V9\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSquareLogoImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V9\Common\AdImageAsset::class);
        $this->square_logo_images = $arr;

        return $this;
    }

    /**
     * Short format headlines for the ad. The maximum length is 30 characters.
     * At least 1 and max 5 headlines can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdTextAsset headlines = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeadlines()
    {
        return $this->headlines;
    }

    /**
     * Short format headlines for the ad. The maximum length is 30 characters.
     * At least 1 and max 5 headlines can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdTextAsset headlines = 5;</code>
     * @param \Google\Ads\GoogleAds\V9\Common\AdTextAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeadlines($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V9\Common\AdTextAsset::class);
        $this->headlines = $arr;

        return $this;
    }

    /**
     * A required long format headline. The maximum length is 90 characters.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.AdTextAsset long_headline = 6;</code>
     * @return \Google\Ads\GoogleAds\V9\Common\AdTextAsset|null
     */
    public function getLongHeadline()
    {
        return $this->long_headline;
    }

    public function hasLongHeadline()
    {
        return isset($this->long_headline);
    }

    public function clearLongHeadline()
    {
        unset($this->long_headline);
    }

    /**
     * A required long format headline. The maximum length is 90 characters.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.AdTextAsset long_headline = 6;</code>
     * @param \Google\Ads\GoogleAds\V9\Common\AdTextAsset $var
     * @return $this
     */
    public function setLongHeadline($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Common\AdTextAsset::class);
        $this->long_headline = $var;

        return $this;
    }

    /**
     * Descriptive texts for the ad. The maximum length is 90 characters. At
     * least 1 and max 5 headlines can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdTextAsset descriptions = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Descriptive texts for the ad. The maximum length is 90 characters. At
     * least 1 and max 5 headlines can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdTextAsset descriptions = 7;</code>
     * @param \Google\Ads\GoogleAds\V9\Common\AdTextAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDescriptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V9\Common\AdTextAsset::class);
        $this->descriptions = $arr;

        return $this;
    }

    /**
     * Optional YouTube videos for the ad. A maximum of 5 videos can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdVideoAsset youtube_videos = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getYoutubeVideos()
    {
        return $this->youtube_videos;
    }

    /**
     * Optional YouTube videos for the ad. A maximum of 5 videos can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.AdVideoAsset youtube_videos = 8;</code>
     * @param \Google\Ads\GoogleAds\V9\Common\AdVideoAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setYoutubeVideos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V9\Common\AdVideoAsset::class);
        $this->youtube_videos = $arr;

        return $this;
    }

    /**
     * The advertiser/brand name. Maximum display width is 25.
     *
     * Generated from protobuf field <code>optional string business_name = 17;</code>
     * @return string
     */
    public function getBusinessName()
    {
        return isset($this->business_name) ? $this->business_name : '';
    }

    public function hasBusinessName()
    {
        return isset($this->business_name);
    }

    public function clearBusinessName()
    {
        unset($this->business_name);
    }

    /**
     * The advertiser/brand name. Maximum display width is 25.
     *
     * Generated from protobuf field <code>optional string business_name = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessName($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_name = $var;

        return $this;
    }

    /**
     * The main color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of `main_color` and `accent_color` is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>optional string main_color = 18;</code>
     * @return string
     */
    public function getMainColor()
    {
        return isset($this->main_color) ? $this->main_color : '';
    }

    public function hasMainColor()
    {
        return isset($this->main_color);
    }

    public function clearMainColor()
    {
        unset($this->main_color);
    }

    /**
     * The main color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of `main_color` and `accent_color` is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>optional string main_color = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setMainColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->main_color = $var;

        return $this;
    }

    /**
     * The accent color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of `main_color` and `accent_color` is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>optional string accent_color = 19;</code>
     * @return string
     */
    public function getAccentColor()
    {
        return isset($this->accent_color) ? $this->accent_color : '';
    }

    public function hasAccentColor()
    {
        return isset($this->accent_color);
    }

    public function clearAccentColor()
    {
        unset($this->accent_color);
    }

    /**
     * The accent color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of `main_color` and `accent_color` is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>optional string accent_color = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setAccentColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->accent_color = $var;

        return $this;
    }

    /**
     * Advertiser's consent to allow flexible color. When true, the ad may be
     * served with different color if necessary. When false, the ad will be served
     * with the specified colors or a neutral color.
     * The default value is `true`.
     * Must be true if `main_color` and `accent_color` are not set.
     *
     * Generated from protobuf field <code>optional bool allow_flexible_color = 20;</code>
     * @return bool
     */
    public function getAllowFlexibleColor()
    {
        return isset($this->allow_flexible_color) ? $this->allow_flexible_color : false;
    }

    public function hasAllowFlexibleColor()
    {
        return isset($this->allow_flexible_color);
    }

    public function clearAllowFlexibleColor()
    {
        unset($this->allow_flexible_color);
    }

    /**
     * Advertiser's consent to allow flexible color. When true, the ad may be
     * served with different color if necessary. When false, the ad will be served
     * with the specified colors or a neutral color.
     * The default value is `true`.
     * Must be true if `main_color` and `accent_color` are not set.
     *
     * Generated from protobuf field <code>optional bool allow_flexible_color = 20;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowFlexibleColor($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_flexible_color = $var;

        return $this;
    }

    /**
     * The call-to-action text for the ad. Maximum display width is 30.
     *
     * Generated from protobuf field <code>optional string call_to_action_text = 21;</code>
     * @return string
     */
    public function getCallToActionText()
    {
        return isset($this->call_to_action_text) ? $this->call_to_action_text : '';
    }

    public function hasCallToActionText()
    {
        return isset($this->call_to_action_text);
    }

    public function clearCallToActionText()
    {
        unset($this->call_to_action_text);
    }

    /**
     * The call-to-action text for the ad. Maximum display width is 30.
     *
     * Generated from protobuf field <code>optional string call_to_action_text = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setCallToActionText($var)
    {
        GPBUtil::checkString($var, True);
        $this->call_to_action_text = $var;

        return $this;
    }

    /**
     * Prefix before price. E.g. 'as low as'.
     *
     * Generated from protobuf field <code>optional string price_prefix = 22;</code>
     * @return string
     */
    public function getPricePrefix()
    {
        return isset($this->price_prefix) ? $this->price_prefix : '';
    }

    public function hasPricePrefix()
    {
        return isset($this->price_prefix);
    }

    public function clearPricePrefix()
    {
        unset($this->price_prefix);
    }

    /**
     * Prefix before price. E.g. 'as low as'.
     *
     * Generated from protobuf field <code>optional string price_prefix = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setPricePrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->price_prefix = $var;

        return $this;
    }

    /**
     * Promotion text used for dynamic formats of responsive ads. For example
     * 'Free two-day shipping'.
     *
     * Generated from protobuf field <code>optional string promo_text = 23;</code>
     * @return string
     */
    public function getPromoText()
    {
        return isset($this->promo_text) ? $this->promo_text : '';
    }

    public function hasPromoText()
    {
        return isset($this->promo_text);
    }

    public function clearPromoText()
    {
        unset($this->promo_text);
    }

    /**
     * Promotion text used for dynamic formats of responsive ads. For example
     * 'Free two-day shipping'.
     *
     * Generated from protobuf field <code>optional string promo_text = 23;</code>
     * @param string $var
     * @return $this
     */
    public function setPromoText($var)
    {
        GPBUtil::checkString($var, True);
        $this->promo_text = $var;

        return $this;
    }

    /**
     * Specifies which format the ad will be served in. Default is ALL_FORMATS.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.DisplayAdFormatSettingEnum.DisplayAdFormatSetting format_setting = 16;</code>
     * @return int
     */
    public function getFormatSetting()
    {
        return $this->format_setting;
    }

    /**
     * Specifies which format the ad will be served in. Default is ALL_FORMATS.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.DisplayAdFormatSettingEnum.DisplayAdFormatSetting format_setting = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setFormatSetting($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V9\Enums\DisplayAdFormatSettingEnum\DisplayAdFormatSetting::class);
        $this->format_setting = $var;

        return $this;
    }

    /**
     * Specification for various creative controls.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.ResponsiveDisplayAdControlSpec control_spec = 24;</code>
     * @return \Google\Ads\GoogleAds\V9\Common\ResponsiveDisplayAdControlSpec|null
     */
    public function getControlSpec()
    {
        return $this->control_spec;
    }

    public function hasControlSpec()
    {
        return isset($this->control_spec);
    }

    public function clearControlSpec()
    {
        unset($this->control_spec);
    }

    /**
     * Specification for various creative controls.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.ResponsiveDisplayAdControlSpec control_spec = 24;</code>
     * @param \Google\Ads\GoogleAds\V9\Common\ResponsiveDisplayAdControlSpec $var
     * @return $this
     */
    public function setControlSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Common\ResponsiveDisplayAdControlSpec::class);
        $this->control_spec = $var;

        return $this;
    }

}

