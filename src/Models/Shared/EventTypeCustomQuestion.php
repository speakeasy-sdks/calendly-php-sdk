<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


class EventTypeCustomQuestion
{
    /**
     * The invitee’s option(s) for single_select or multi_select type of responses.
     * 
     * @var array<string> $answerChoices
     */
	#[\JMS\Serializer\Annotation\SerializedName('answer_choices')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $answerChoices;
    
    /**
     * true if the question created by the host is turned ON and visible on the event booking page; false if turned OFF and invisible on the event booking page.
     * 
     * @var bool $enabled
     */
	#[\JMS\Serializer\Annotation\SerializedName('enabled')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $enabled;
    
    /**
     * true if the custom question lets invitees record a written response in addition to single-select or multiple-select type of responses; false if it doesn’t.
     * 
     * @var bool $includeOther
     */
	#[\JMS\Serializer\Annotation\SerializedName('include_other')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $includeOther;
    
    /**
     * The custom question that the host created for the event type.
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * The numerical position of the question on the event booking page after the name and email address fields.
     * 
     * @var float $position
     */
	#[\JMS\Serializer\Annotation\SerializedName('position')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $position;
    
    /**
     * true if a response to the question created by the host is required for invitees to book the event type; false if not required.
     * 
     * @var bool $required
     */
	#[\JMS\Serializer\Annotation\SerializedName('required')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $required;
    
    /**
     * The type of response that the invitee provides to the custom question; can be one or multiple lines of text, a phone number, or single- or multiple-select.
     * 
     * @var \calendly\calendly\Models\Shared\EventTypeCustomQuestionTypeEnum $type
     */
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
