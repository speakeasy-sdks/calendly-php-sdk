<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetOrganizationsOrgUuidInvitationsUuidRequest
{
    public GetOrganizationsOrgUuidInvitationsUuidPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\GetOrganizationsOrgUuidInvitationsUuidPathParams();
	}
}
