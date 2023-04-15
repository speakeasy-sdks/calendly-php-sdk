<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;
class ListRoutingFormsRequest
{
    /**
     * The number of rows to return
     * 
     * @var ?float $count
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=count')]
    public ?float $count = null;
    
    /**
     * View organization routing forms associated with the organization's URI.
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
     * Order results by the specified field and direction. Accepts comma-separated list of {field}:{direction} values. Supported fields are: created_at. Sort direction is specified as: asc, desc.
     * 
     * @var ?string $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?string $sort = null;
    
	public function __construct()
	{
		$this->count = null;
		$this->organization = "";
		$this->pageToken = null;
		$this->sort = null;
	}
}