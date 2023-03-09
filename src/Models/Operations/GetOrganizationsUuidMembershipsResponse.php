<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetOrganizationsUuidMembershipsResponse
{
    public string $contentType;
    
    public ?GetOrganizationsUuidMembershipsErrorResponse $errorResponse = null;
    
    public ?\calendly\calendly\Models\Shared\ErrorResponse $errorResponse1 = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetOrganizationsUuidMemberships200ApplicationJSON $getOrganizationsUuidMemberships200ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->errorResponse1 = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getOrganizationsUuidMemberships200ApplicationJSONObject = null;
	}
}
