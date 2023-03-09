<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetUserResponse
{
    public string $contentType;
    
    public ?GetUserErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetUser200ApplicationJSON $getUser200ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getUser200ApplicationJSONObject = null;
	}
}
