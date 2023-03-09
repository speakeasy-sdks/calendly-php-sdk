<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * InviteePayment
 * Invitee payment
 */
class InviteePayment
{
    #[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $amount;
    
    #[\JMS\Serializer\Annotation\SerializedName('currency')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\InviteePaymentCurrencyEnum>')]
    public InviteePaymentCurrencyEnum $currency;
    
    #[\JMS\Serializer\Annotation\SerializedName('external_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $externalId;
    
    #[\JMS\Serializer\Annotation\SerializedName('provider')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\InviteePaymentProviderEnum>')]
    public InviteePaymentProviderEnum $provider;
    
    #[\JMS\Serializer\Annotation\SerializedName('successful')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $successful;
    
    #[\JMS\Serializer\Annotation\SerializedName('terms')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $terms;
    
	public function __construct()
	{
		$this->amount = 0;
		$this->currency = \calendly\calendly\Models\Shared\InviteePaymentCurrencyEnum::AUD;
		$this->externalId = "";
		$this->provider = \calendly\calendly\Models\Shared\InviteePaymentProviderEnum::STRIPE;
		$this->successful = false;
		$this->terms = "";
	}
}
