<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class DeleteUsersUserUuidWebhooksWebhookUuidRequest
{
    public DeleteUsersUserUuidWebhooksWebhookUuidPathParams $pathParams;
    
    public DeleteUsersUserUuidWebhooksWebhookUuidSecurity $security;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\DeleteUsersUserUuidWebhooksWebhookUuidPathParams();
		$this->security = new \calendly\calendly\Models\Operations\DeleteUsersUserUuidWebhooksWebhookUuidSecurity();
	}
}
