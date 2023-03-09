<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostDataComplianceDeletionInviteesRequestBody
{
    /**
     * @var array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('emails')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $emails;
    
	public function __construct()
	{
		$this->emails = [];
	}
}
