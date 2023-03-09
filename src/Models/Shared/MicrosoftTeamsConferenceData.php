<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * MicrosoftTeamsConferenceData
 * The conference metadata supplied by Microsoft Teams
 */
class MicrosoftTeamsConferenceData
{
    #[\JMS\Serializer\Annotation\SerializedName('audioConferencing')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\MicrosoftTeamsConferenceDataAudioConferencing')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?MicrosoftTeamsConferenceDataAudioConferencing $audioConferencing = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
	public function __construct()
	{
		$this->audioConferencing = null;
		$this->id = null;
	}
}
