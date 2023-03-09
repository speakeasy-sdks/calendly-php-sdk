<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetRoutingFormsUuid200ApplicationJSON
{
    #[\JMS\Serializer\Annotation\SerializedName('resource')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\RoutingForm')]
    public \calendly\calendly\Models\Shared\RoutingForm $resource;
    
	public function __construct()
	{
		$this->resource = new \calendly\calendly\Models\Shared\RoutingForm();
	}
}
