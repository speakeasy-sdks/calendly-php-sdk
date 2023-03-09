<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class GetOrganizationsUuidInvitationsQueryParams
{
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=count')]
    public ?float $count = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=email')]
    public ?string $email = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page_token')]
    public ?string $pageToken = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?string $sort = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=status')]
    public ?GetOrganizationsUuidInvitationsStatusEnum $status = null;
    
	public function __construct()
	{
		$this->count = null;
		$this->email = null;
		$this->pageToken = null;
		$this->sort = null;
		$this->status = null;
	}
}
