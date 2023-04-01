<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;
class GetScheduledEventsUuidRequest
{
    /**
     * The event's unique identifier
     * 
     * @var string $uuid
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=uuid')]
    public string $uuid;
    
	public function __construct()
	{
		$this->uuid = "";
	}
}
