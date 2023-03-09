<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetOrganizationsUuidMemberships200ApplicationJSON
{
    #[\JMS\Serializer\Annotation\SerializedName('resource')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\OrganizationMembership')]
    public \calendly\calendly\Models\Shared\OrganizationMembership $resource;
    
	public function __construct()
	{
		$this->resource = new \calendly\calendly\Models\Shared\OrganizationMembership();
	}
}
