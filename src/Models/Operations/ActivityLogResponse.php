<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


class ActivityLogResponse
{
	
    public string $contentType;
    
    /**
     * Request is not valid
     * 
     * @var ?\calendly\calendly\Models\Operations\ActivityLogErrorResponse $errorResponse
     */
	
    public ?ActivityLogErrorResponse $errorResponse = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * OK
     * 
     * @var ?\calendly\calendly\Models\Operations\ActivityLog200ApplicationJSON $activityLog200ApplicationJSONObject
     */
	
    public ?ActivityLog200ApplicationJSON $activityLog200ApplicationJSONObject = null;
    
    /**
     * Permission Denied
     * 
     * @var ?\calendly\calendly\Models\Operations\ActivityLog403ApplicationJSON $activityLog403ApplicationJSONObject
     */
	
    public ?ActivityLog403ApplicationJSON $activityLog403ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->activityLog200ApplicationJSONObject = null;
		$this->activityLog403ApplicationJSONObject = null;
	}
}
