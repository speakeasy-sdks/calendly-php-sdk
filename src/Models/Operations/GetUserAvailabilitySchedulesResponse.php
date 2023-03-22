<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


class GetUserAvailabilitySchedulesResponse
{
	
    public string $contentType;
    
    /**
     * Request is not valid
     * 
     * @var ?\calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesErrorResponse $errorResponse
     */
	
    public ?GetUserAvailabilitySchedulesErrorResponse $errorResponse = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * OK
     * 
     * @var ?\calendly\calendly\Models\Operations\GetUserAvailabilitySchedules200ApplicationJSON $getUserAvailabilitySchedules200ApplicationJSONObject
     */
	
    public ?GetUserAvailabilitySchedules200ApplicationJSON $getUserAvailabilitySchedules200ApplicationJSONObject = null;
    
    /**
     * Permission Denied
     * 
     * @var ?\calendly\calendly\Models\Operations\GetUserAvailabilitySchedules403ApplicationJSON $getUserAvailabilitySchedules403ApplicationJSONObject
     */
	
    public ?GetUserAvailabilitySchedules403ApplicationJSON $getUserAvailabilitySchedules403ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getUserAvailabilitySchedules200ApplicationJSONObject = null;
		$this->getUserAvailabilitySchedules403ApplicationJSONObject = null;
	}
}
