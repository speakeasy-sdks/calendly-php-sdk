<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostUsersUuidWebhooksRequestBody
{
    /**
     * @var array<\calendly\calendly\Models\Operations\PostUsersUuidWebhooksRequestBodyEventsEnum>
     */
    #[\JMS\Serializer\Annotation\SerializedName('events')]
    #[\JMS\Serializer\Annotation\Type('array<enum<calendly\calendly\Models\Operations\PostUsersUuidWebhooksRequestBodyEventsEnum>>')]
    public array $events;
    
    #[\JMS\Serializer\Annotation\SerializedName('organization')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $organization;
    
    #[\JMS\Serializer\Annotation\SerializedName('scope')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Operations\PostUsersUuidWebhooksRequestBodyScopeEnum>')]
    public PostUsersUuidWebhooksRequestBodyScopeEnum $scope;
    
    #[\JMS\Serializer\Annotation\SerializedName('signing_key')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $signingKey = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $url;
    
    #[\JMS\Serializer\Annotation\SerializedName('user')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $user = null;
    
	public function __construct()
	{
		$this->events = [];
		$this->organization = "";
		$this->scope = \calendly\calendly\Models\Operations\PostUsersUuidWebhooksRequestBodyScopeEnum::ORGANIZATION;
		$this->signingKey = null;
		$this->url = "";
		$this->user = null;
	}
}
