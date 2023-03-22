<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/**
 * PostInviteeNoShow201ApplicationJSON - Created
 * 
 * @package calendly\calendly\Models\Operations
 * @access public
 */
class PostInviteeNoShow201ApplicationJSON
{
    /**
     * Information about an invitees no show.
     * 
     * @var \calendly\calendly\Models\Shared\InviteeNoShow $resource
     */
	#[\JMS\Serializer\Annotation\SerializedName('resource')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\InviteeNoShow')]
    public \calendly\calendly\Models\Shared\InviteeNoShow $resource;
    
	public function __construct()
	{
		$this->resource = new \calendly\calendly\Models\Shared\InviteeNoShow();
	}
}
