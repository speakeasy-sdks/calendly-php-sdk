<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetRoutingFormSubmissionsResponse
{
    public string $contentType;
    
    public ?GetRoutingFormSubmissionsErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetRoutingFormSubmissions200ApplicationJSON $getRoutingFormSubmissions200ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getRoutingFormSubmissions200ApplicationJSONObject = null;
	}
}
