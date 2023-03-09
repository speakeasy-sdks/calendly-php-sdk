<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * Question
 * Routing form questions.
 */
class Question
{
    /**
     * @var array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('answer_choices')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $answerChoices;
    
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    #[\JMS\Serializer\Annotation\SerializedName('required')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $required;
    
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\QuestionTypeEnum>')]
    public QuestionTypeEnum $type;
    
    #[\JMS\Serializer\Annotation\SerializedName('uuid')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $uuid;
    
	public function __construct()
	{
		$this->answerChoices = [];
		$this->name = "";
		$this->required = false;
		$this->type = \calendly\calendly\Models\Shared\QuestionTypeEnum::NAME;
		$this->uuid = "";
	}
}
