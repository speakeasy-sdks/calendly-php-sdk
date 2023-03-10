<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class PostOrganizationsUuidInvitationsRequest
{
    public PostOrganizationsUuidInvitationsPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public PostOrganizationsUuidInvitationsRequestBody $request;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\PostOrganizationsUuidInvitationsPathParams();
		$this->request = new \calendly\calendly\Models\Operations\PostOrganizationsUuidInvitationsRequestBody();
	}
}
