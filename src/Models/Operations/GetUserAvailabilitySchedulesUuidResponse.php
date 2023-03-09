<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetUserAvailabilitySchedulesUuidResponse
{
    public string $contentType;
    
    public ?GetUserAvailabilitySchedulesUuidErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetUserAvailabilitySchedulesUuid200ApplicationJSON $getUserAvailabilitySchedulesUuid200ApplicationJSONObject = null;
    
    public ?GetUserAvailabilitySchedulesUuid403ApplicationJSON $getUserAvailabilitySchedulesUuid403ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getUserAvailabilitySchedulesUuid200ApplicationJSONObject = null;
		$this->getUserAvailabilitySchedulesUuid403ApplicationJSONObject = null;
	}
}
