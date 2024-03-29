<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/**
 * GetOrganizationsUuidMemberships200ApplicationJSON - OK
 * 
 * @package calendly\calendly\Models\Operations
 * @access public
 */
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
