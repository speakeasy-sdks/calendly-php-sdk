<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class RevokeUsersOrganizationInvitationResponse
{
    public string $contentType;
    
    public ?RevokeUsersOrganizationInvitationErrorResponse $errorResponse1 = null;
    
    public ?\calendly\calendly\Models\Shared\ErrorResponse $errorResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?RevokeUsersOrganizationInvitation403ApplicationJSON $revokeUsersOrganizationInvitation403ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse1 = null;
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->revokeUsersOrganizationInvitation403ApplicationJSONObject = null;
	}
}
