<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetOrganizationMembershipsRequest
{
    public GetOrganizationMembershipsQueryParams $queryParams;
    
    public GetOrganizationMembershipsSecurity $security;
    
	public function __construct()
	{
		$this->queryParams = new \calendly\calendly\Models\Operations\GetOrganizationMembershipsQueryParams();
		$this->security = new \calendly\calendly\Models\Operations\GetOrganizationMembershipsSecurity();
	}
}
