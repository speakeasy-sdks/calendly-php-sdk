<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class GetOrganizationsOrgUuidInvitationsUuidPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=org_uuid')]
    public string $orgUuid;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=uuid')]
    public string $uuid;
    
	public function __construct()
	{
		$this->orgUuid = "";
		$this->uuid = "";
	}
}
