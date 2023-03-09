<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostSharesRequestBodyLocationConfigurations
{
    #[\JMS\Serializer\Annotation\SerializedName('additional_info')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $additionalInfo = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('kind')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Operations\PostSharesRequestBodyLocationConfigurationsKindEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PostSharesRequestBodyLocationConfigurationsKindEnum $kind = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('location')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $location = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('phone_number')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $phoneNumber = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('position')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $position = null;
    
	public function __construct()
	{
		$this->additionalInfo = null;
		$this->kind = null;
		$this->location = null;
		$this->phoneNumber = null;
		$this->position = null;
	}
}
