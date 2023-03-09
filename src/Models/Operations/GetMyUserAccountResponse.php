<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetMyUserAccountResponse
{
    public string $contentType;
    
    public ?GetMyUserAccountErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetMyUserAccount200ApplicationJSON $getMyUserAccount200ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getMyUserAccount200ApplicationJSONObject = null;
	}
}
