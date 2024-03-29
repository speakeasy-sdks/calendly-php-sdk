<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/**
 * GetWebhooks200ApplicationJSON - OK
 * 
 * @package calendly\calendly\Models\Operations
 * @access public
 */
class GetWebhooks200ApplicationJSON
{
    /**
     * $collection
     * 
     * @var array<\calendly\calendly\Models\Shared\WebhookSubscription> $collection
     */
	#[\JMS\Serializer\Annotation\SerializedName('collection')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\WebhookSubscription>')]
    public array $collection;
    
	#[\JMS\Serializer\Annotation\SerializedName('pagination')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\Pagination')]
    public \calendly\calendly\Models\Shared\Pagination $pagination;
    
	public function __construct()
	{
		$this->collection = [];
		$this->pagination = new \calendly\calendly\Models\Shared\Pagination();
	}
}
