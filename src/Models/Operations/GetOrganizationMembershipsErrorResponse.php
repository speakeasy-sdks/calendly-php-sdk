<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/**
 * GetOrganizationMembershipsErrorResponse
 * Error Object
 */
class GetOrganizationMembershipsErrorResponse
{
    /**
     * @var ?array<\calendly\calendly\Models\Operations\GetOrganizationMembershipsErrorResponseDetails>
     */
    #[\JMS\Serializer\Annotation\SerializedName('details')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Operations\GetOrganizationMembershipsErrorResponseDetails>')]
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
