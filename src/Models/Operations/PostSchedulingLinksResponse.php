<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostSchedulingLinksResponse
{
    public string $contentType;
    
    public ?PostSchedulingLinksErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?PostSchedulingLinks201ApplicationJSON $postSchedulingLinks201ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->postSchedulingLinks201ApplicationJSONObject = null;
	}
}
