<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * InviteeQuestionAndAnswer - A response to a question on a booking page form
 * 
 * @package calendly\calendly\Models\Shared
 * @access public
 */
class InviteeQuestionAndAnswer
{
    /**
     * The invitee's answer to the question
     * 
     * @var string $answer
     */
	#[\JMS\Serializer\Annotation\SerializedName('answer')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $answer;
    
    /**
     * The position of the question in relation to others on the booking form
     * 
     * @var float $position
     */
	#[\JMS\Serializer\Annotation\SerializedName('position')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $position;
    
    /**
     * A question on the invitee's booking form
     * 
     * @var string $question
     */
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
