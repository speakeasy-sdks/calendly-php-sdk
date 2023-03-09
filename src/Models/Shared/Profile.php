<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * Profile
 * The publicly visible profile of a User or a Team that's associated with the Event Type (note: some Event Types don't have profiles)
 */
class Profile
{
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    #[\JMS\Serializer\Annotation\SerializedName('owner')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $owner;
    
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\ProfileTypeEnum>')]
    public ProfileTypeEnum $type;
    
	public function __construct()
	{
		$this->name = "";
		$this->owner = "";
		$this->type = \calendly\calendly\Models\Shared\ProfileTypeEnum::USER;
	}
}
