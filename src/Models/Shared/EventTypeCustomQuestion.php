<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;



class EventTypeCustomQuestion
{
    /**
     * @var array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('answer_choices')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $answerChoices;
    
    #[\JMS\Serializer\Annotation\SerializedName('enabled')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $enabled;
    
    #[\JMS\Serializer\Annotation\SerializedName('include_other')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $includeOther;
    
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    #[\JMS\Serializer\Annotation\SerializedName('position')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $position;
    
    #[\JMS\Serializer\Annotation\SerializedName('required')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $required;
    
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\EventTypeCustomQuestionTypeEnum>')]
    public EventTypeCustomQuestionTypeEnum $type;
    
	public function __construct()
	{
		$this->answerChoices = [];
		$this->enabled = false;
		$this->includeOther = false;
		$this->name = "";
		$this->position = 0;
		$this->required = false;
		$this->type = \calendly\calendly\Models\Shared\EventTypeCustomQuestionTypeEnum::STRING;
	}
}
