<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/**
 * GetUser200ApplicationJSON
 * Service response
 */
class GetUser200ApplicationJSON
{
    #[\JMS\Serializer\Annotation\SerializedName('resource')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\User')]
    public \calendly\calendly\Models\Shared\User $resource;
    
	public function __construct()
	{
		$this->resource = new \calendly\calendly\Models\Shared\User();
	}
}
