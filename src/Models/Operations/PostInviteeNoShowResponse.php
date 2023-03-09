<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostInviteeNoShowResponse
{
    public string $contentType;
    
    public ?PostInviteeNoShowErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?PostInviteeNoShow201ApplicationJSON $postInviteeNoShow201ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->postInviteeNoShow201ApplicationJSONObject = null;
	}
}
