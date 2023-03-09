<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostScheduledEventsUuidCancellationRaw201ApplicationJSON
{
    #[\JMS\Serializer\Annotation\SerializedName('resource')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\Cancellation')]
    public \calendly\calendly\Models\Shared\Cancellation $resource;
    
	public function __construct()
	{
		$this->resource = new \calendly\calendly\Models\Shared\Cancellation();
	}
}
