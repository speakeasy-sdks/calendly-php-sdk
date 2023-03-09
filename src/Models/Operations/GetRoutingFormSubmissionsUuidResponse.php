<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetRoutingFormSubmissionsUuidResponse
{
    public string $contentType;
    
    public ?GetRoutingFormSubmissionsUuidErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetRoutingFormSubmissionsUuid200ApplicationJSON $getRoutingFormSubmissionsUuid200ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getRoutingFormSubmissionsUuid200ApplicationJSONObject = null;
	}
}
