<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetEventTypesUuidResponse
{
    public string $contentType;
    
    public ?GetEventTypesUuidErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetEventTypesUuid200ApplicationJSON $getEventTypesUuid200ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getEventTypesUuid200ApplicationJSONObject = null;
	}
}
