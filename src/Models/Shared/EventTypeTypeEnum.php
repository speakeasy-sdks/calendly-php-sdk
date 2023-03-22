<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/** Indicates if the event type is "AdhocEventType" (ad hoc event) or "StandardEventType" (standard event type) */
enum EventTypeTypeEnum: string
{
    case STANDARD_EVENT_TYPE = 'StandardEventType';
    case ADHOC_EVENT_TYPE = 'AdhocEventType';
}
