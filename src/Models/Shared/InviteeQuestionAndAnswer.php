<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * InviteeQuestionAndAnswer
 * A response to a question on a booking page form
 */
class InviteeQuestionAndAnswer
{
    #[\JMS\Serializer\Annotation\SerializedName('answer')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $answer;
    
    #[\JMS\Serializer\Annotation\SerializedName('position')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $position;
    
    #[\JMS\Serializer\Annotation\SerializedName('question')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $question;
    
	public function __construct()
	{
		$this->answer = "";
		$this->position = 0;
		$this->question = "";
	}
}
