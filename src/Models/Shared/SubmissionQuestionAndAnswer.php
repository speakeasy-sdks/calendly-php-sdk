<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * SubmissionQuestionAndAnswer
 * All Routing Form Submission questions with answers.
 */
class SubmissionQuestionAndAnswer
{
    #[\JMS\Serializer\Annotation\SerializedName('answer')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $answer = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('question')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $question;
    
    #[\JMS\Serializer\Annotation\SerializedName('question_uuid')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $questionUuid;
    
	public function __construct()
	{
		$this->answer = null;
		$this->question = "";
		$this->questionUuid = "";
	}
}
