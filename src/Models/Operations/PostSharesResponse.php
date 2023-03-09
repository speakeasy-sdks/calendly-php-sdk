<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostSharesResponse
{
    public string $contentType;
    
    public ?PostSharesErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?PostShares201ApplicationJSON $postShares201ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->postShares201ApplicationJSONObject = null;
	}
}
