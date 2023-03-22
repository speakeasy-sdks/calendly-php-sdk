<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/**
 * PostOrganizationsUuidInvitations201ApplicationJSON - Created
 * 
 * @package calendly\calendly\Models\Operations
 * @access public
 */
class PostOrganizationsUuidInvitations201ApplicationJSON
{
    /**
     * Organization Invitation object
     * 
     * @var \calendly\calendly\Models\Shared\OrganizationInvitation $resource
     */
	#[\JMS\Serializer\Annotation\SerializedName('resource')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\OrganizationInvitation')]
    public \calendly\calendly\Models\Shared\OrganizationInvitation $resource;
    
	public function __construct()
	{
		$this->resource = new \calendly\calendly\Models\Shared\OrganizationInvitation();
	}
}
