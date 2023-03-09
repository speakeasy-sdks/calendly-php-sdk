<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;



class Pagination
{
    #[\JMS\Serializer\Annotation\SerializedName('count')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $count;
    
    #[\JMS\Serializer\Annotation\SerializedName('next_page')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $nextPage;
    
    #[\JMS\Serializer\Annotation\SerializedName('next_page_token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $nextPageToken;
    
    #[\JMS\Serializer\Annotation\SerializedName('previous_page')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $previousPage;
    
    #[\JMS\Serializer\Annotation\SerializedName('previous_page_token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $previousPageToken;
    
	public function __construct()
	{
		$this->count = 0;
		$this->nextPage = "";
		$this->nextPageToken = "";
		$this->previousPage = "";
		$this->previousPageToken = "";
	}
}
