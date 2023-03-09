<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * RoutingForm
 * Information about a routing form.
 */
class RoutingForm
{
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    #[\JMS\Serializer\Annotation\SerializedName('organization')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $organization;
    
    /**
     * @var array<\calendly\calendly\Models\Shared\Question>
     */
    #[\JMS\Serializer\Annotation\SerializedName('questions')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\Question>')]
    public array $questions;
    
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\RoutingFormStatusEnum>')]
    public RoutingFormStatusEnum $status;
    
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('uri')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $uri;
    
	public function __construct()
	{
		$this->createdAt = new \DateTime();
		$this->name = "";
		$this->organization = "";
		$this->questions = [];
		$this->status = \calendly\calendly\Models\Shared\RoutingFormStatusEnum::DRAFT;
		$this->updatedAt = new \DateTime();
		$this->uri = "";
	}
}
