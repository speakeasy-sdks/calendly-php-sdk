<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostInviteeNoShowRequestBody
{
    #[\JMS\Serializer\Annotation\SerializedName('invitee')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $invitee = null;
    
	public function __construct()
	{
		$this->invitee = null;
	}
}
