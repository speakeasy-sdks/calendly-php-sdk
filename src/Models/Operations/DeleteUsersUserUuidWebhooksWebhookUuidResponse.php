<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


class DeleteUsersUserUuidWebhooksWebhookUuidResponse
{
	
    public string $contentType;
    
    /**
     * Cannot authenticate caller
     * 
     * @var ?\calendly\calendly\Models\Operations\DeleteUsersUserUuidWebhooksWebhookUuidErrorResponse $errorResponse
     */
	
    public ?DeleteUsersUserUuidWebhooksWebhookUuidErrorResponse $errorResponse = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
