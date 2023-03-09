<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * ActorGroup
 * User group information about the actor
 */
class ActorGroup
{
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('role')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $role = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('uri')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $uri = null;
    
	public function __construct()
	{
		$this->name = null;
		$this->role = null;
		$this->uri = null;
	}
}
