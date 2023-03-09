<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostSchedulingLinks201ApplicationJSON
{
    #[\JMS\Serializer\Annotation\SerializedName('resource')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Operations\PostSchedulingLinks201ApplicationJSONResource')]
    public PostSchedulingLinks201ApplicationJSONResource $resource;
    
	public function __construct()
	{
		$this->resource = new \calendly\calendly\Models\Operations\PostSchedulingLinks201ApplicationJSONResource();
	}
}
