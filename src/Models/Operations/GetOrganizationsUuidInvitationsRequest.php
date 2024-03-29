<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;
class GetOrganizationsUuidInvitationsRequest
{
    /**
     * The number of rows to return
     * 
     * @var ?float $count
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=count')]
    public ?float $count = null;
    
    /**
     * Indicates if the results should be filtered by email address
     * 
     * @var ?string $email
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=email')]
    public ?string $email = null;
    
    /**
     * The token to pass to get the next or previous portion of the collection
     * 
     * @var ?string $pageToken
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page_token')]
    public ?string $pageToken = null;
    
    /**
     * Order results by the field name and direction specified (ascending or descending). Returns multiple sets of results in a comma-separated list.
     * 
     * @var ?string $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?string $sort = null;
    
    /**
     * Indicates if the results should be filtered by status  ("pending", "accepted", or "declined")
     * 
     * @var ?\calendly\calendly\Models\Operations\GetOrganizationsUuidInvitationsStatusEnum $status
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=status')]
    public ?GetOrganizationsUuidInvitationsStatusEnum $status = null;
    
    /**
     * The organization's unique identifier
     * 
     * @var string $uuid
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=uuid')]
    public string $uuid;
    
	public function __construct()
	{
		$this->count = null;
		$this->email = null;
		$this->pageToken = null;
		$this->sort = null;
		$this->status = null;
		$this->uuid = "";
	}
}
