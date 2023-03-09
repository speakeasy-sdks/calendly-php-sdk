<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class GetRoutingFormsUuidSecurity
{
    #[SpeakeasyMetadata('security:scheme=true,type=oauth2')]
    public ?\calendly\calendly\Models\Shared\SchemeOauth2 $oauth2 = null;
    
    #[SpeakeasyMetadata('security:scheme=true,type=http,subtype=bearer')]
    public ?\calendly\calendly\Models\Shared\SchemePersonalAccessToken $personalAccessToken = null;
    
	public function __construct()
	{
		$this->oauth2 = null;
		$this->personalAccessToken = null;
	}
}
