<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetWebhooksResponse
{
    public string $contentType;
    
    public ?GetWebhooksErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetWebhooks200ApplicationJSON $getWebhooks200ApplicationJSONObject = null;
    
    public ?GetWebhooks403ApplicationJSON $getWebhooks403ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getWebhooks200ApplicationJSONObject = null;
		$this->getWebhooks403ApplicationJSONObject = null;
	}
}
