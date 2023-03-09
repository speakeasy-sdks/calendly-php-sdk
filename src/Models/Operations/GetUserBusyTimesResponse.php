<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetUserBusyTimesResponse
{
    public string $contentType;
    
    public ?GetUserBusyTimesErrorResponse $errorResponse = null;
    
    public ?\calendly\calendly\Models\Shared\ErrorResponse $errorResponse1 = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetUserBusyTimes200ApplicationJSON $getUserBusyTimes200ApplicationJSONObject = null;
    
    public ?GetUserBusyTimes403ApplicationJSON $getUserBusyTimes403ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->errorResponse1 = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getUserBusyTimes200ApplicationJSONObject = null;
		$this->getUserBusyTimes403ApplicationJSONObject = null;
	}
}
