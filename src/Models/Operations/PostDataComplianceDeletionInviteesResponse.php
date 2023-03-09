<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostDataComplianceDeletionInviteesResponse
{
    public string $contentType;
    
    public ?PostDataComplianceDeletionInviteesErrorResponse $errorResponse = null;
    
    public ?\calendly\calendly\Models\Shared\ErrorResponse $errorResponse1 = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * @var ?array<string, mixed>
     */
    public ?array $postDataComplianceDeletionInvitees202ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->errorResponse1 = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->postDataComplianceDeletionInvitees202ApplicationJSONObject = null;
	}
}
