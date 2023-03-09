<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostDataComplianceDeletionEventsRequestBody
{
    #[\JMS\Serializer\Annotation\SerializedName('end_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $endTime;
    
    #[\JMS\Serializer\Annotation\SerializedName('start_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $startTime;
    
	public function __construct()
	{
		$this->endTime = new \DateTime();
		$this->startTime = new \DateTime();
	}
}
