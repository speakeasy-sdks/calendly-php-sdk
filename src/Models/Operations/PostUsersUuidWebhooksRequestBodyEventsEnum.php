<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


enum PostUsersUuidWebhooksRequestBodyEventsEnum: string
{
    case INVITEE_CANCELED = 'invitee.canceled';
    case INVITEE_CREATED = 'invitee.created';
    case ROUTING_FORM_SUBMISSION_CREATED = 'routing_form_submission.created';
}
