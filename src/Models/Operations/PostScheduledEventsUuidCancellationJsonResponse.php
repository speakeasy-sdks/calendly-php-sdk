<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostScheduledEventsUuidCancellationJsonResponse
{
    public string $contentType;
    
    public ?PostScheduledEventsUuidCancellationJsonErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?PostScheduledEventsUuidCancellationJSON201ApplicationJSON $postScheduledEventsUuidCancellationJSON201ApplicationJSONObject = null;
    
    public ?PostScheduledEventsUuidCancellationJSON403ApplicationJSON $postScheduledEventsUuidCancellationJSON403ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->postScheduledEventsUuidCancellationJSON201ApplicationJSONObject = null;
		$this->postScheduledEventsUuidCancellationJSON403ApplicationJSONObject = null;
	}
}
