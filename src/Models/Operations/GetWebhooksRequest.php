<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetWebhooksRequest
{
    public GetWebhooksQueryParams $queryParams;
    
    public GetWebhooksSecurity $security;
    
	public function __construct()
	{
		$this->queryParams = new \calendly\calendly\Models\Operations\GetWebhooksQueryParams();
		$this->security = new \calendly\calendly\Models\Operations\GetWebhooksSecurity();
	}
}
