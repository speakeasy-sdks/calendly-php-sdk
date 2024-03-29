<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


class PostSharesResponse
{
	
    public string $contentType;
    
    /**
     * Request is not valid
     * 
     * @var ?\calendly\calendly\Models\Operations\PostSharesErrorResponse $errorResponse
     */
	
    public ?PostSharesErrorResponse $errorResponse = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Created
     * 
     * @var ?\calendly\calendly\Models\Operations\PostShares201ApplicationJSON $postShares201ApplicationJSONObject
     */
	
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
