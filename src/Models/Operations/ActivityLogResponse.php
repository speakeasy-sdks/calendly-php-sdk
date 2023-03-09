<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class ActivityLogResponse
{
    public string $contentType;
    
    public ?ActivityLogErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?ActivityLog200ApplicationJSON $activityLog200ApplicationJSONObject = null;
    
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
