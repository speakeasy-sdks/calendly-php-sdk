<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


class GetRoutingFormsResponse
{
	
    public string $contentType;
    
    /**
     * Request is not valid
     * 
     * @var ?\calendly\calendly\Models\Operations\GetRoutingFormsErrorResponse $errorResponse
     */
	
    public ?GetRoutingFormsErrorResponse $errorResponse = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * OK
     * 
     * @var ?\calendly\calendly\Models\Operations\GetRoutingForms200ApplicationJSON $getRoutingForms200ApplicationJSONObject
     */
	
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
