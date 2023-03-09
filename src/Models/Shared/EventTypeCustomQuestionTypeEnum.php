<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum EventTypeCustomQuestionTypeEnum: string
{
    case STRING = 'string';
    case TEXT = 'text';
    case PHONE_NUMBER = 'phone_number';
    case SINGLE_SELECT = 'single_select';
    case MULTI_SELECT = 'multi_select';
}
