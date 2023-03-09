<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


enum ActivityLogSortEnum: string
{
    case ACTION_ASC = 'action:asc';
    case ACTION_DESC = 'action:desc';
    case ACTOR_DISPLAY_NAME_ASC = 'actor.display_name:asc';
    case ACTOR_DISPLAY_NAME_DESC = 'actor.display_name:desc';
    case ACTOR_URI_ASC = 'actor.uri:asc';
    case ACTOR_URI_DESC = 'actor.uri:desc';
    case NAMESPACE_ASC = 'namespace:asc';
    case NAMESPACE_DESC = 'namespace:desc';
    case OCCURRED_AT_ASC = 'occurred_at:asc';
    case OCCURRED_AT_DESC = 'occurred_at:desc';
}
