<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * Entry
 * Object for a created activity log record
 */
class Entry
{
    #[\JMS\Serializer\Annotation\SerializedName('action')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $action;
    
    #[\JMS\Serializer\Annotation\SerializedName('actor')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\Actor')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Actor $actor = null;
    
    /**
     * @var array<string, mixed>
     */
    #[\JMS\Serializer\Annotation\SerializedName('details')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    public array $details;
    
    #[\JMS\Serializer\Annotation\SerializedName('fully_qualified_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $fullyQualifiedName;
    
    #[\JMS\Serializer\Annotation\SerializedName('namespace')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $namespace;
    
    #[\JMS\Serializer\Annotation\SerializedName('occurred_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $occurredAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('organization')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $organization;
    
    #[\JMS\Serializer\Annotation\SerializedName('uri')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $uri;
    
	public function __construct()
	{
		$this->action = "";
		$this->actor = null;
		$this->details = [];
		$this->fullyQualifiedName = "";
		$this->namespace = "";
		$this->occurredAt = new \DateTime();
		$this->organization = "";
		$this->uri = "";
	}
}
