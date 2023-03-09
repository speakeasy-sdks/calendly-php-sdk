<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetOrganizationsUuidInvitationsRequest
{
    public GetOrganizationsUuidInvitationsPathParams $pathParams;
    
    public GetOrganizationsUuidInvitationsQueryParams $queryParams;
    
    public GetOrganizationsUuidInvitationsSecurity $security;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\GetOrganizationsUuidInvitationsPathParams();
		$this->queryParams = new \calendly\calendly\Models\Operations\GetOrganizationsUuidInvitationsQueryParams();
		$this->security = new \calendly\calendly\Models\Operations\GetOrganizationsUuidInvitationsSecurity();
	}
}
