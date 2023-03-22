<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/**
 * PostDataComplianceDeletionEventsRequestBody - The start and end times that delineate the time range for scheduled events data deletion.
 * 
 * @package calendly\calendly\Models\Operations
 * @access public
 */
class PostDataComplianceDeletionEventsRequestBody
{
    /**
     * The scheduled events UTC timestamp at which data deletion should end.
     * 
     * @var \DateTime $endTime
     */
	#[\JMS\Serializer\Annotation\SerializedName('end_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $endTime;
    
    /**
     * The scheduled events UTC timestamp at which data deletion should begin.
     * 
     * @var \DateTime $startTime
     */
	#[\JMS\Serializer\Annotation\SerializedName('start_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $startTime;
    
	public function __construct()
	{
		$this->endTime = new \DateTime();
		$this->startTime = new \DateTime();
	}
}
