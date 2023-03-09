<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetUsersUserUuidWebhooksWebhookUuidRequest
{
    public GetUsersUserUuidWebhooksWebhookUuidPathParams $pathParams;
    
    public GetUsersUserUuidWebhooksWebhookUuidSecurity $security;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\GetUsersUserUuidWebhooksWebhookUuidPathParams();
		$this->security = new \calendly\calendly\Models\Operations\GetUsersUserUuidWebhooksWebhookUuidSecurity();
	}
}
