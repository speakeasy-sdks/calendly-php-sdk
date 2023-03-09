<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetInviteeNoShowResponse
{
    public string $contentType;
    
    public ?GetInviteeNoShowErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetInviteeNoShow200ApplicationJSON $getInviteeNoShow200ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getInviteeNoShow200ApplicationJSONObject = null;
	}
}
