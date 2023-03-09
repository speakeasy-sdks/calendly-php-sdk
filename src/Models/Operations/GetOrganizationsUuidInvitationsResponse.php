<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetOrganizationsUuidInvitationsResponse
{
    public string $contentType;
    
    public ?GetOrganizationsUuidInvitationsErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?GetOrganizationsUuidInvitations200ApplicationJSON $getOrganizationsUuidInvitations200ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getOrganizationsUuidInvitations200ApplicationJSONObject = null;
	}
}
