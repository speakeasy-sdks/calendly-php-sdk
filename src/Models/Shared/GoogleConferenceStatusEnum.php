<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum GoogleConferenceStatusEnum: string
{
    case INITIATED = 'initiated';
    case PROCESSING = 'processing';
    case PUSHED = 'pushed';
    case FAILED = 'failed';
}
