<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum QuestionTypeEnum: string
{
    case NAME = 'name';
    case TEXT = 'text';
    case EMAIL = 'email';
    case PHONE = 'phone';
    case TEXTAREA = 'textarea';
    case SELECT = 'select';
    case RADIOS = 'radios';
}
