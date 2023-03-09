<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * Actor
 * The Calendly actor that took the action creating the activity log entry
 * 
 * Specific actors:
 * 
 * <details>
 * <summary>Calendly System</summary>
 * 
 * Used when an action is performed by the Calendly system and not triggered directly by a user interaction.
 * 
 * Example:
 * ```json
 * {
 *     "display_name": "Calendly System",
 *     "type": "System"
 * }
 * ```
 * 
 * </details>
 * 
 * <br />
 * 
 * <details>
 * <summary>Calendly Support</summary>
 * Used when an action is performed by Calendly support.
 * 
 * Example:
 * ```json
 * {
 *   "display_name": "Calendly Support",
 *   "organization": {
 *     "uri": "https://api.calendly.com/organizations/AAAAAAAAAAAAAAAA"
 *   },
 *   "type": "User",
 *   "uri": "https://api.calendly.com/users/AAAAAAAAAAAAAAAA"
 * }
 * ```
 * </details>
 * 
 */
class Actor
{
    #[\JMS\Serializer\Annotation\SerializedName('alternative_identifier')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $alternativeIdentifier = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('display_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $displayName = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('group')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\ActorGroup')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ActorGroup $group = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('organization')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\ActorOrganization')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ActorOrganization $organization = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $type;
    
    #[\JMS\Serializer\Annotation\SerializedName('uri')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $uri = null;
    
	public function __construct()
	{
		$this->alternativeIdentifier = null;
		$this->displayName = null;
		$this->group = null;
		$this->organization = null;
		$this->type = "";
		$this->uri = null;
	}
}
