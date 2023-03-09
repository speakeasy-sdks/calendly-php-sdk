<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostShares201ApplicationJSON
{
    #[\JMS\Serializer\Annotation\SerializedName('resource')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\Share')]
    public \calendly\calendly\Models\Shared\Share $resource;
    
	public function __construct()
	{
		$this->resource = new \calendly\calendly\Models\Shared\Share();
	}
}