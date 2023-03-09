<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * Cancellation
 * Provides data pertaining to the cancellation of the Event
 */
class Cancellation
{
    #[\JMS\Serializer\Annotation\SerializedName('canceled_by')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $canceledBy;
    
    #[\JMS\Serializer\Annotation\SerializedName('canceler_type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\CancellationCancelerTypeEnum>')]
    public CancellationCancelerTypeEnum $cancelerType;
    
    #[\JMS\Serializer\Annotation\SerializedName('reason')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $reason;
    
	public function __construct()
	{
		$this->canceledBy = "";
		$this->cancelerType = \calendly\calendly\Models\Shared\CancellationCancelerTypeEnum::HOST;
		$this->reason = "";
	}
}
