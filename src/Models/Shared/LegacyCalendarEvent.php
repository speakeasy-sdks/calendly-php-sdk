<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * LegacyCalendarEvent
 * Information about the calendar event from the calendar provider.
 */
class LegacyCalendarEvent
{
    #[\JMS\Serializer\Annotation\SerializedName('external_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $externalId;
    
    #[\JMS\Serializer\Annotation\SerializedName('kind')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\LegacyCalendarEventKindEnum>')]
    public LegacyCalendarEventKindEnum $kind;
    
	public function __construct()
	{
		$this->externalId = "";
		$this->kind = \calendly\calendly\Models\Shared\LegacyCalendarEventKindEnum::EXCHANGE;
	}
}
