<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetScheduledEventsEventUuidInviteesInviteeUuidResponse
{
    public string $contentType;
    
    public ?GetScheduledEventsEventUuidInviteesInviteeUuidErrorResponse $errorResponse = null;
    
    public ?\calendly\calendly\Models\Shared\ErrorResponse $errorResponse1 = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetScheduledEventsEventUuidInviteesInviteeUuid200ApplicationJSON $getScheduledEventsEventUuidInviteesInviteeUuid200ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->errorResponse1 = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getScheduledEventsEventUuidInviteesInviteeUuid200ApplicationJSONObject = null;
	}
}
