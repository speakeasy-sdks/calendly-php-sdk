<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetOrganizationMembershipsResponse
{
    public string $contentType;
    
    public ?GetOrganizationMembershipsErrorResponse $errorResponse = null;
    
    public ?\calendly\calendly\Models\Shared\ErrorResponse $errorResponse1 = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetOrganizationMemberships200ApplicationJSON $getOrganizationMemberships200ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->errorResponse1 = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getOrganizationMemberships200ApplicationJSONObject = null;
	}
}
