<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum InviteePaymentProviderEnum: string
{
    case STRIPE = 'stripe';
    case PAYPAL = 'paypal';
}
