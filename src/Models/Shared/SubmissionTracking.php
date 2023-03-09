<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * SubmissionTracking
 * The UTM and Salesforce tracking parameters associated with a Routing Form Submission.
 */
class SubmissionTracking
{
    #[\JMS\Serializer\Annotation\SerializedName('salesforce_uuid')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $salesforceUuid;
    
    #[\JMS\Serializer\Annotation\SerializedName('utm_campaign')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $utmCampaign;
    
    #[\JMS\Serializer\Annotation\SerializedName('utm_content')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $utmContent;
    
    #[\JMS\Serializer\Annotation\SerializedName('utm_medium')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $utmMedium;
    
    #[\JMS\Serializer\Annotation\SerializedName('utm_source')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $utmSource;
    
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
