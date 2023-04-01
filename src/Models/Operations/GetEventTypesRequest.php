<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;
class GetEventTypesRequest
{
    /**
     * Return only active event types if true, only inactive if false, or all event types if this parameter is omitted.
     * 
     * @var ?bool $active
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=active')]
    public ?bool $active = null;
    
    /**
     * Return only admin managed event types if true, exclude admin managed event types if false, or include all event types if this parameter is omitted.
     * 
     * @var ?bool $adminManaged
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=admin_managed')]
    public ?bool $adminManaged = null;
    
    /**
     * The number of rows to return
     * 
     * @var ?float $count
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=count')]
    public ?float $count = null;
    
    /**
     * View available personal, team, and organization event types associated with the organization's URI.
     * 
     * @var ?string $organization
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=organization')]
    public ?string $organization = null;
    
    /**
     * The token to pass to get the next or previous portion of the collection
     * 
     * @var ?string $pageToken
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page_token')]
    public ?string $pageToken = null;
    
    /**
     * Order results by the specified field and direction. Accepts comma-separated list of {field}:{direction} values.
     * 
     * Supported fields are: name.
     * Sort direction is specified as: asc, desc.
     * 
     * @var ?string $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?string $sort = null;
    
    /**
     * View available personal, team, and organization event types associated with the user's URI.
     * 
     * @var ?string $user
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=user')]
    public ?string $user = null;
    
	public function __construct()
	{
		$this->active = null;
		$this->adminManaged = null;
		$this->count = null;
		$this->organization = null;
		$this->pageToken = null;
		$this->sort = null;
		$this->user = null;
	}
}
