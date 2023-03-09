<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * WebhookSubscription
 * Webhook Subscription Object
 */
class WebhookSubscription
{
    #[\JMS\Serializer\Annotation\SerializedName('callback_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $callbackUrl;
    
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('creator')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $creator;
    
    /**
     * @var array<\calendly\calendly\Models\Shared\WebhookSubscriptionEventsEnum>
     */
    #[\JMS\Serializer\Annotation\SerializedName('events')]
    #[\JMS\Serializer\Annotation\Type('array<enum<calendly\calendly\Models\Shared\WebhookSubscriptionEventsEnum>>')]
    public array $events;
    
    #[\JMS\Serializer\Annotation\SerializedName('organization')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $organization;
    
    #[\JMS\Serializer\Annotation\SerializedName('retry_started_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $retryStartedAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('scope')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\WebhookSubscriptionScopeEnum>')]
    public WebhookSubscriptionScopeEnum $scope;
    
    #[\JMS\Serializer\Annotation\SerializedName('state')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\WebhookSubscriptionStateEnum>')]
    public WebhookSubscriptionStateEnum $state;
    
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('uri')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $uri;
    
    #[\JMS\Serializer\Annotation\SerializedName('user')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $user;
    
	public function __construct()
	{
		$this->callbackUrl = "";
		$this->createdAt = new \DateTime();
		$this->creator = "";
		$this->events = [];
		$this->organization = "";
		$this->retryStartedAt = new \DateTime();
		$this->scope = \calendly\calendly\Models\Shared\WebhookSubscriptionScopeEnum::USER;
		$this->state = \calendly\calendly\Models\Shared\WebhookSubscriptionStateEnum::ACTIVE;
		$this->updatedAt = new \DateTime();
		$this->uri = "";
		$this->user = "";
	}
}
