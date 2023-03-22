<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;
class GetWebhooksQueryParams
{
    /**
     * The number of rows to return
     * 
     * @var ?float $count
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=count')]
    public ?float $count = null;
    
    /**
     * Indicates if the results should be filtered by organization
     * 
     * @var string $organization
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=organization')]
    public string $organization;
    
    /**
     * The token to pass to get the next or previous portion of the collection
     * 
     * @var ?string $pageToken
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page_token')]
    public ?string $pageToken = null;
    
    /**
     * Filter the list by organization or user
     * 
     * @var \calendly\calendly\Models\Operations\GetWebhooksScopeEnum $scope
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=scope')]
    public GetWebhooksScopeEnum $scope;
    
    /**
     * Order results by the specified field and direction. Accepts comma-separated list of {field}:{direction} values.
     * 
     * Supported fields are: created_at.
     * Sort direction is specified as: asc, desc.
     * 
     * @var ?string $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?string $sort = null;
    
    /**
     * Indicates if the results should be filtered by user. This parameter is only required if the `scope` parameter is set to `user`.
     * 
     * @var ?string $user
     */
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
