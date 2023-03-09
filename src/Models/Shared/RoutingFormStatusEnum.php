<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum RoutingFormStatusEnum: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
}
