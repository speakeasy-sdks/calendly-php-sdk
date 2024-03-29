<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * User - Information about the user.
 * 
 * @package calendly\calendly\Models\Shared
 * @access public
 */
class User
{
    /**
     * The URL of the user's avatar (image)
     * 
     * @var string $avatarUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('avatar_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $avatarUrl;
    
    /**
     * The moment when the user's record was created (e.g. "2020-01-02T03:04:05.678123Z")
     * 
     * @var \DateTime $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    /**
     * A unique reference to the user's current organization
     * 
     * @var string $currentOrganization
     */
	#[\JMS\Serializer\Annotation\SerializedName('current_organization')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $currentOrganization;
    
    /**
     * The user's email address
     * 
     * @var string $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $email;
    
    /**
     * The user's name (human-readable format)
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * The URL of the user's Calendly landing page (that lists all the user's event types)
     * 
     * @var string $schedulingUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('scheduling_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $schedulingUrl;
    
    /**
     * The portion of URL for the user's scheduling page (where invitees book sessions), rendered in a human-readable format
     * 
     * @var string $slug
     */
	#[\JMS\Serializer\Annotation\SerializedName('slug')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $slug;
    
    /**
     * The time zone to use when presenting time to the user
     * 
     * @var string $timezone
     */
	#[\JMS\Serializer\Annotation\SerializedName('timezone')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $timezone;
    
    /**
     * The moment when the user's record was last updated (e.g. "2020-01-02T03:04:05.678123Z")
     * 
     * @var \DateTime $updatedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;
    
    /**
     * Canonical reference (unique identifier) for the user
     * 
     * @var string $uri
     */
	#[\JMS\Serializer\Annotation\SerializedName('uri')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $uri;
    
	public function __construct()
	{
		$this->avatarUrl = "";
		$this->createdAt = new \DateTime();
		$this->currentOrganization = "";
		$this->email = "";
		$this->name = "";
		$this->schedulingUrl = "";
		$this->slug = "";
		$this->timezone = "";
		$this->updatedAt = new \DateTime();
		$this->uri = "";
	}
}
