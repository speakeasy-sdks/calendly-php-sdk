<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum WebhookSubscriptionEventsEnum: string
{
    case INVITEE_CREATED = 'invitee.created';
    case INVITEE_CANCELED = 'invitee.canceled';
    case ROUTING_FORM_SUBMISSION_CREATED = 'routing_form_submission.created';
}
