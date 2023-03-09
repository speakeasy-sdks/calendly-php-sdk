<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostUsersUuidWebhooks201ApplicationJSON
{
    #[\JMS\Serializer\Annotation\SerializedName('resource')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\WebhookSubscription')]
    public \calendly\calendly\Models\Shared\WebhookSubscription $resource;
    
	public function __construct()
	{
		$this->resource = new \calendly\calendly\Models\Shared\WebhookSubscription();
	}
}
