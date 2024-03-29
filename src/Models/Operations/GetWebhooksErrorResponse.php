<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/**
 * GetWebhooksErrorResponse - Error Object
 * 
 * @package calendly\calendly\Models\Operations
 * @access public
 */
class GetWebhooksErrorResponse
{
    /**
     * $details
     * 
     * @var ?array<\calendly\calendly\Models\Operations\GetWebhooksErrorResponseDetails> $details
     */
	#[\JMS\Serializer\Annotation\SerializedName('details')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Operations\GetWebhooksErrorResponseDetails>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $details = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $message;
    
	#[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $title;
    
	public function __construct()
	{
		$this->details = null;
		$this->message = "";
		$this->title = "";
	}
}
