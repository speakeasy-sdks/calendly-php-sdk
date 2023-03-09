<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * SubmissionCustomMessageResultValue
 * Contains an object with custom message headline and body.
 */
class SubmissionCustomMessageResultValue
{
    #[\JMS\Serializer\Annotation\SerializedName('body')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $body;
    
    #[\JMS\Serializer\Annotation\SerializedName('headline')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $headline;
    
	public function __construct()
	{
		$this->body = "";
		$this->headline = "";
	}
}
