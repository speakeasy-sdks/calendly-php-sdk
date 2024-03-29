<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/**
 * GetRoutingFormSubmissionsUuid200ApplicationJSON - OK
 * 
 * @package calendly\calendly\Models\Operations
 * @access public
 */
class GetRoutingFormSubmissionsUuid200ApplicationJSON
{
    /**
     * Information about a Routing Form Submission.
     * 
     * @var \calendly\calendly\Models\Shared\RoutingFormSubmission $resource
     */
	#[\JMS\Serializer\Annotation\SerializedName('resource')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\RoutingFormSubmission')]
    public \calendly\calendly\Models\Shared\RoutingFormSubmission $resource;
    
	public function __construct()
	{
		$this->resource = new \calendly\calendly\Models\Shared\RoutingFormSubmission();
	}
}
