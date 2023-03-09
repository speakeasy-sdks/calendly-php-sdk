<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;



class MicrosoftTeamsConferenceDataAudioConferencing
{
    #[\JMS\Serializer\Annotation\SerializedName('conferenceId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $conferenceId = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('dialinUrl')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $dialinUrl = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('tollNumber')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $tollNumber = null;
    
	public function __construct()
	{
		$this->conferenceId = null;
		$this->dialinUrl = null;
		$this->tollNumber = null;
	}
}
