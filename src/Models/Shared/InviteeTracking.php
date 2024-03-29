<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * InviteeTracking - The UTM and Salesforce tracking parameters associated with an Invitee
 * 
 * @package calendly\calendly\Models\Shared
 * @access public
 */
class InviteeTracking
{
    /**
     * The Salesforce record unique identifier
     * 
     * @var string $salesforceUuid
     */
	#[\JMS\Serializer\Annotation\SerializedName('salesforce_uuid')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $salesforceUuid;
    
    /**
     * The UTM parameter used to track a campaign
     * 
     * @var string $utmCampaign
     */
	#[\JMS\Serializer\Annotation\SerializedName('utm_campaign')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $utmCampaign;
    
    /**
     * UTM content tracking parameter
     * 
     * @var string $utmContent
     */
	#[\JMS\Serializer\Annotation\SerializedName('utm_content')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $utmContent;
    
    /**
     * The UTM parameter that identifies the type of input (e.g. Cost Per Click (CPC), social media, affiliate or QR code)
     * 
     * @var string $utmMedium
     */
	#[\JMS\Serializer\Annotation\SerializedName('utm_medium')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $utmMedium;
    
    /**
     * The UTM parameter that identifies the source (platform where the traffic originates)
     * 
     * @var string $utmSource
     */
	#[\JMS\Serializer\Annotation\SerializedName('utm_source')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $utmSource;
    
    /**
     * The UTM parameter used to track keywords
     * 
     * @var string $utmTerm
     */
	#[\JMS\Serializer\Annotation\SerializedName('utm_term')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $utmTerm;
    
	public function __construct()
	{
		$this->salesforceUuid = "";
		$this->utmCampaign = "";
		$this->utmContent = "";
		$this->utmMedium = "";
		$this->utmSource = "";
		$this->utmTerm = "";
	}
}
