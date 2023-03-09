<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostScheduledEventsUuidCancellationMultipartResponse
{
    public string $contentType;
    
    public ?PostScheduledEventsUuidCancellationMultipartErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?PostScheduledEventsUuidCancellationMultipart201ApplicationJSON $postScheduledEventsUuidCancellationMultipart201ApplicationJSONObject = null;
    
    public ?PostScheduledEventsUuidCancellationMultipart403ApplicationJSON $postScheduledEventsUuidCancellationMultipart403ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->postScheduledEventsUuidCancellationMultipart201ApplicationJSONObject = null;
		$this->postScheduledEventsUuidCancellationMultipart403ApplicationJSONObject = null;
	}
}
