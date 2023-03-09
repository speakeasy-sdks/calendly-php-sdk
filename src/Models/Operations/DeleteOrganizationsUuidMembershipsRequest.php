<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class DeleteOrganizationsUuidMembershipsRequest
{
    public DeleteOrganizationsUuidMembershipsPathParams $pathParams;
    
    public DeleteOrganizationsUuidMembershipsSecurity $security;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\DeleteOrganizationsUuidMembershipsPathParams();
		$this->security = new \calendly\calendly\Models\Operations\DeleteOrganizationsUuidMembershipsSecurity();
	}
}
