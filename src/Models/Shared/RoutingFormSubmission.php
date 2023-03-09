<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * RoutingFormSubmission
 * Information about a Routing Form Submission.
 */
class RoutingFormSubmission
{
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    /**
     * @var array<\calendly\calendly\Models\Shared\SubmissionQuestionAndAnswer>
     */
    #[\JMS\Serializer\Annotation\SerializedName('questions_and_answers')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\SubmissionQuestionAndAnswer>')]
    public array $questionsAndAnswers;
    
    #[\JMS\Serializer\Annotation\SerializedName('result')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $result = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('routing_form')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $routingForm;
    
    #[\JMS\Serializer\Annotation\SerializedName('submitter')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $submitter;
    
    #[\JMS\Serializer\Annotation\SerializedName('submitter_type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\RoutingFormSubmissionSubmitterTypeEnum>')]
    public RoutingFormSubmissionSubmitterTypeEnum $submitterType;
    
    #[\JMS\Serializer\Annotation\SerializedName('tracking')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\SubmissionTracking')]
    public SubmissionTracking $tracking;
    
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('uri')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $uri;
    
	public function __construct()
	{
		$this->createdAt = new \DateTime();
		$this->questionsAndAnswers = [];
		$this->result = null;
		$this->routingForm = "";
		$this->submitter = "";
		$this->submitterType = \calendly\calendly\Models\Shared\RoutingFormSubmissionSubmitterTypeEnum::INVITEE;
		$this->tracking = new \calendly\calendly\Models\Shared\SubmissionTracking();
		$this->updatedAt = new \DateTime();
		$this->uri = "";
	}
}
