<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetOrganizationsOrgUuidInvitationsUuidRequest
{
    public GetOrganizationsOrgUuidInvitationsUuidPathParams $pathParams;
    
    public GetOrganizationsOrgUuidInvitationsUuidSecurity $security;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\GetOrganizationsOrgUuidInvitationsUuidPathParams();
		$this->security = new \calendly\calendly\Models\Operations\GetOrganizationsOrgUuidInvitationsUuidSecurity();
	}
}
