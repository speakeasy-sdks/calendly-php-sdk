<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


enum PostScheduledEventsUuidCancellationRaw403ApplicationJSONMessageEnum: string
{
    case YOU_ARE_NOT_ALLOWED_TO_CANCEL_THIS_EVENT = 'You are not allowed to cancel this event';
    case EVENT_IN_THE_PAST = 'Event in the past';
    case EVENT_IS_ALREADY_CANCELED = 'Event is already canceled';
}
