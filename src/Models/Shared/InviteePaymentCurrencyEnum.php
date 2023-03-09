<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum InviteePaymentCurrencyEnum: string
{
    case AUD = 'AUD';
    case CAD = 'CAD';
    case EUR = 'EUR';
    case GBP = 'GBP';
    case USD = 'USD';
}
