<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;



class Share
{
    /**
     * @var array<\calendly\calendly\Models\Shared\ShareSchedulingLinks>
     */
    #[\JMS\Serializer\Annotation\SerializedName('scheduling_links')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\ShareSchedulingLinks>')]
    public array $schedulingLinks;
    
    #[\JMS\Serializer\Annotation\SerializedName('share_override')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\ShareShareOverride')]
    public ShareShareOverride $shareOverride;
    
	public function __construct()
	{
		$this->schedulingLinks = [];
		$this->shareOverride = new \calendly\calendly\Models\Shared\ShareShareOverride();
	}
}
