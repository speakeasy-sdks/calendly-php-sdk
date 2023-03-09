<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetRoutingFormsResponse
{
    public string $contentType;
    
    public ?GetRoutingFormsErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetRoutingForms200ApplicationJSON $getRoutingForms200ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getRoutingForms200ApplicationJSONObject = null;
	}
}
