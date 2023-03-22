<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


class GetScheduledEventsEventUuidInviteesInviteeUuidResponse
{
	
    public string $contentType;
    
    /**
     * Request is not valid
     * 
     * @var ?\calendly\calendly\Models\Operations\GetScheduledEventsEventUuidInviteesInviteeUuidErrorResponse $errorResponse
     */
	
    public ?GetScheduledEventsEventUuidInviteesInviteeUuidErrorResponse $errorResponse = null;
    
    /**
     * Caller not authorized to view event
     * 
     * @var ?\calendly\calendly\Models\Shared\ErrorResponse $errorResponse1
     */
	
    public ?\calendly\calendly\Models\Shared\ErrorResponse $errorResponse1 = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * OK
     * 
     * @var ?\calendly\calendly\Models\Operations\GetScheduledEventsEventUuidInviteesInviteeUuid200ApplicationJSON $getScheduledEventsEventUuidInviteesInviteeUuid200ApplicationJSONObject
     */
	
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
