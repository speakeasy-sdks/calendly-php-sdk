<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetEventTypesResponse
{
    public string $contentType;
    
    public ?GetEventTypesErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetEventTypes200ApplicationJSON $getEventTypes200ApplicationJSONObject = null;
    
    public ?GetEventTypes403ApplicationJSON $getEventTypes403ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getEventTypes200ApplicationJSONObject = null;
		$this->getEventTypes403ApplicationJSONObject = null;
	}
}
