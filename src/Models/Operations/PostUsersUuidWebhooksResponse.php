<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostUsersUuidWebhooksResponse
{
    public string $contentType;
    
    public ?PostUsersUuidWebhooksErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?PostUsersUuidWebhooks201ApplicationJSON $postUsersUuidWebhooks201ApplicationJSONObject = null;
    
    public ?PostUsersUuidWebhooks403ApplicationJSON $postUsersUuidWebhooks403ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->postUsersUuidWebhooks201ApplicationJSONObject = null;
		$this->postUsersUuidWebhooks403ApplicationJSONObject = null;
	}
}
