<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/**
 * GetEventTypes403ApplicationJSON - Permission Denied
 * 
 * @package calendly\calendly\Models\Operations
 * @access public
 */
class GetEventTypes403ApplicationJSON
{
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Operations\GetEventTypes403ApplicationJSONMessageEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetEventTypes403ApplicationJSONMessageEnum $message = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Operations\GetEventTypes403ApplicationJSONTitleEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetEventTypes403ApplicationJSONTitleEnum $title = null;
    
	public function __construct()
	{
		$this->message = null;
		$this->title = null;
	}
}
