<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class GetWebhooksQueryParams
{
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=count')]
    public ?float $count = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=organization')]
    public string $organization;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page_token')]
    public ?string $pageToken = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=scope')]
    public GetWebhooksScopeEnum $scope;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?string $sort = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=user')]
    public ?string $user = null;
    
	public function __construct()
	{
		$this->count = null;
		$this->organization = "";
		$this->pageToken = null;
		$this->scope = \calendly\calendly\Models\Operations\GetWebhooksScopeEnum::ORGANIZATION;
		$this->sort = null;
		$this->user = null;
	}
}
