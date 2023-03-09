<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * AvailabilitySchedule
 * The availability schedule set by the user.
 */
class AvailabilitySchedule
{
    #[\JMS\Serializer\Annotation\SerializedName('default')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $default;
    
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * @var array<\calendly\calendly\Models\Shared\AvailabilityRule>
     */
    #[\JMS\Serializer\Annotation\SerializedName('rules')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\AvailabilityRule>')]
    public array $rules;
    
    #[\JMS\Serializer\Annotation\SerializedName('timezone')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $timezone;
    
    #[\JMS\Serializer\Annotation\SerializedName('uri')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $uri;
    
    #[\JMS\Serializer\Annotation\SerializedName('user')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $user;
    
	public function __construct()
	{
		$this->default = false;
		$this->name = "";
		$this->rules = [];
		$this->timezone = "";
		$this->uri = "";
		$this->user = "";
	}
}
