<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class DeleteUsersUserUuidWebhooksWebhookUuidPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=webhook_uuid')]
    public string $webhookUuid;
    
	public function __construct()
	{
		$this->webhookUuid = "";
	}
}
