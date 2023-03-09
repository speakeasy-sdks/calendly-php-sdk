<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetScheduledEventsResponse
{
    public string $contentType;
    
    public ?GetScheduledEventsErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetScheduledEvents200ApplicationJSON $getScheduledEvents200ApplicationJSONObject = null;
    
    public ?GetScheduledEvents403ApplicationJSON $getScheduledEvents403ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getScheduledEvents200ApplicationJSONObject = null;
		$this->getScheduledEvents403ApplicationJSONObject = null;
	}
}
