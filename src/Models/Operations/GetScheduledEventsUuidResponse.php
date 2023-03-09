<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetScheduledEventsUuidResponse
{
    public string $contentType;
    
    public ?GetScheduledEventsUuidErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetScheduledEventsUuid200ApplicationJSON $getScheduledEventsUuid200ApplicationJSONObject = null;
    
    public ?GetScheduledEventsUuid403ApplicationJSON $getScheduledEventsUuid403ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getScheduledEventsUuid200ApplicationJSONObject = null;
		$this->getScheduledEventsUuid403ApplicationJSONObject = null;
	}
}
