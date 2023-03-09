<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostInviteeNoShowErrorResponseDetails
{
    #[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $message;
    
    #[\JMS\Serializer\Annotation\SerializedName('parameter')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $parameter = null;
    
	public function __construct()
	{
		$this->message = "";
		$this->parameter = null;
	}
}
