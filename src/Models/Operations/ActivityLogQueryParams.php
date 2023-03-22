<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;
class ActivityLogQueryParams
{
    /**
     * The action(s) associated with the entries
     * 
     * @var ?array<string> $action
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=false,name=action')]
    public ?array $action = null;
    
    /**
     * Return entries from the user(s) associated with the provided URIs
     * 
     * @var ?array<string> $actor
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=false,name=actor')]
    public ?array $actor = null;
    
    /**
     * The number of rows to return
     * 
     * @var ?int $count
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=count')]
    public ?int $count = null;
    
    /**
     * Include entries that occurred prior to this time (sample time format: "2020-01-02T03:04:05.678Z"). This time should use the UTC timezone.
     * 
     * @var ?\DateTime $maxOccurredAt
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=max_occurred_at,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $maxOccurredAt = null;
    
    /**
     * Include entries that occurred after this time (sample time format: "2020-01-02T03:04:05.678Z"). This time should use the UTC timezone.
     * 
     * @var ?\DateTime $minOccurredAt
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=min_occurred_at,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $minOccurredAt = null;
    
    /**
     * The categories of the entries
     * 
     * @var ?array<string> $namespace
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=false,name=namespace')]
    public ?array $namespace = null;
    
    /**
     * Return activity log entries from the organization associated with this URI
     * 
     * @var string $organization
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=organization')]
    public string $organization;
    
    /**
     * The token to pass to get the next portion of the collection
     * 
     * @var ?string $pageToken
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page_token')]
    public ?string $pageToken = null;
    
    /**
     * Filters entries based on the search term.
     * 
     * 
     * Supported operators:
     *   - `|` - to allow filtering by one term or another. Example: `this | that`
     *   - `+` - to allow filtering by one term and another. Example: `this + that`
     *   - `"` - to allow filtering by an exact search term. Example: `"email@website.com"`
     *   - `-` - to omit specific terms from results. Example: `Added -User`
     *   - `()` - to allow specifying precedence during a search. Example: `(this + that) OR (person + place)`
     *   - `*` - to allow prefix searching. Example `*@other-website.com`
     * 
     * 
     * @var ?string $searchTerm
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=search_term')]
    public ?string $searchTerm = null;
    
    /**
     * Order results by the specified field and direction. List of {field}:{direction} values.
     * 
     * @var ?array<\calendly\calendly\Models\Operations\ActivityLogSortEnum> $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=false,name=sort')]
    public ?array $sort = null;
    
	public function __construct()
	{
		$this->action = null;
		$this->actor = null;
		$this->count = null;
		$this->maxOccurredAt = null;
		$this->minOccurredAt = null;
		$this->namespace = null;
		$this->organization = "";
		$this->pageToken = null;
		$this->searchTerm = null;
		$this->sort = null;
	}
}
