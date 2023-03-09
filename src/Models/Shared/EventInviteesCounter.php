<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;



class EventInviteesCounter
{
    #[\JMS\Serializer\Annotation\SerializedName('active')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $active;
    
    #[\JMS\Serializer\Annotation\SerializedName('limit')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $limit;
    
    #[\JMS\Serializer\Annotation\SerializedName('total')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $total;
    
	public function __construct()
	{
		$this->active = 0;
		$this->limit = 0;
		$this->total = 0;
	}
}
