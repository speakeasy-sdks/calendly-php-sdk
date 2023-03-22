<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/**
 * GetMyUserAccount200ApplicationJSON - Service response
 * 
 * @package calendly\calendly\Models\Operations
 * @access public
 */
class GetMyUserAccount200ApplicationJSON
{
    /**
     * Information about the user.
     * 
     * @var \calendly\calendly\Models\Shared\User $resource
     */
	#[\JMS\Serializer\Annotation\SerializedName('resource')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\User')]
    public \calendly\calendly\Models\Shared\User $resource;
    
	public function __construct()
	{
		$this->resource = new \calendly\calendly\Models\Shared\User();
	}
}
