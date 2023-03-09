<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetInviteesResponse
{
    public string $contentType;
    
    public ?GetInviteesErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetInvitees200ApplicationJSON $getInvitees200ApplicationJSONObject = null;
    
    public ?GetInvitees403ApplicationJSON $getInvitees403ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getInvitees200ApplicationJSONObject = null;
		$this->getInvitees403ApplicationJSONObject = null;
	}
}
