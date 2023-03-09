<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * Invitee
 * An individual who has been invited to meet with a Calendly member
 */
class Invitee
{
    #[\JMS\Serializer\Annotation\SerializedName('cancel_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $cancelUrl;
    
    #[\JMS\Serializer\Annotation\SerializedName('cancellation')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\Cancellation')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Cancellation $cancellation = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $email;
    
    #[\JMS\Serializer\Annotation\SerializedName('event')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $event;
    
    #[\JMS\Serializer\Annotation\SerializedName('first_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $firstName;
    
    #[\JMS\Serializer\Annotation\SerializedName('last_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $lastName;
    
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    #[\JMS\Serializer\Annotation\SerializedName('new_invitee')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $newInvitee;
    
    #[\JMS\Serializer\Annotation\SerializedName('no_show')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\InviteeNoShow1')]
    public InviteeNoShow1 $noShow;
    
    #[\JMS\Serializer\Annotation\SerializedName('old_invitee')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $oldInvitee;
    
    #[\JMS\Serializer\Annotation\SerializedName('payment')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\InviteePayment')]
    public InviteePayment $payment;
    
    /**
     * @var array<\calendly\calendly\Models\Shared\InviteeQuestionAndAnswer>
     */
    #[\JMS\Serializer\Annotation\SerializedName('questions_and_answers')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\InviteeQuestionAndAnswer>')]
    public array $questionsAndAnswers;
    
    #[\JMS\Serializer\Annotation\SerializedName('reconfirmation')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\InviteeReconfirmation')]
    public InviteeReconfirmation $reconfirmation;
    
    #[\JMS\Serializer\Annotation\SerializedName('reschedule_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $rescheduleUrl;
    
    #[\JMS\Serializer\Annotation\SerializedName('rescheduled')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $rescheduled;
    
    #[\JMS\Serializer\Annotation\SerializedName('routing_form_submission')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $routingFormSubmission;
    
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\InviteeStatusEnum>')]
    public InviteeStatusEnum $status;
    
    #[\JMS\Serializer\Annotation\SerializedName('text_reminder_number')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $textReminderNumber;
    
    #[\JMS\Serializer\Annotation\SerializedName('timezone')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $timezone;
    
    #[\JMS\Serializer\Annotation\SerializedName('tracking')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\InviteeTracking')]
    public InviteeTracking $tracking;
    
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('uri')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $uri;
    
	public function __construct()
	{
		$this->cancelUrl = "";
		$this->cancellation = null;
		$this->createdAt = new \DateTime();
		$this->email = "";
		$this->event = "";
		$this->firstName = "";
		$this->lastName = "";
		$this->name = "";
		$this->newInvitee = "";
		$this->noShow = new \calendly\calendly\Models\Shared\InviteeNoShow1();
		$this->oldInvitee = "";
		$this->payment = new \calendly\calendly\Models\Shared\InviteePayment();
		$this->questionsAndAnswers = [];
		$this->reconfirmation = new \calendly\calendly\Models\Shared\InviteeReconfirmation();
		$this->rescheduleUrl = "";
		$this->rescheduled = false;
		$this->routingFormSubmission = "";
		$this->status = \calendly\calendly\Models\Shared\InviteeStatusEnum::ACTIVE;
		$this->textReminderNumber = "";
		$this->timezone = "";
		$this->tracking = new \calendly\calendly\Models\Shared\InviteeTracking();
		$this->updatedAt = new \DateTime();
		$this->uri = "";
	}
}
