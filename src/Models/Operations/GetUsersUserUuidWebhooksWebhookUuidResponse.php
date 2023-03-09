<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetUsersUserUuidWebhooksWebhookUuidResponse
{
    public string $contentType;
    
    public ?GetUsersUserUuidWebhooksWebhookUuidErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetUsersUserUuidWebhooksWebhookUuid200ApplicationJSON $getUsersUserUuidWebhooksWebhookUuid200ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getUsersUserUuidWebhooksWebhookUuid200ApplicationJSONObject = null;
	}
}
