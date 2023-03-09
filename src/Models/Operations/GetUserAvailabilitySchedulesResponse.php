<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetUserAvailabilitySchedulesResponse
{
    public string $contentType;
    
    public ?GetUserAvailabilitySchedulesErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetUserAvailabilitySchedules200ApplicationJSON $getUserAvailabilitySchedules200ApplicationJSONObject = null;
    
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
