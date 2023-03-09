<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostScheduledEventsUuidCancellationRawResponse
{
    public string $contentType;
    
    public ?PostScheduledEventsUuidCancellationRawErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?PostScheduledEventsUuidCancellationRaw201ApplicationJSON $postScheduledEventsUuidCancellationRaw201ApplicationJSONObject = null;
    
    public ?PostScheduledEventsUuidCancellationRaw403ApplicationJSON $postScheduledEventsUuidCancellationRaw403ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->postScheduledEventsUuidCancellationRaw201ApplicationJSONObject = null;
		$this->postScheduledEventsUuidCancellationRaw403ApplicationJSONObject = null;
	}
}
