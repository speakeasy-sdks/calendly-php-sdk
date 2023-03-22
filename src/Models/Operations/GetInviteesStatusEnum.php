<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/** Indicates if the invitee "canceled" or still "active" */
enum GetInviteesStatusEnum: string
{
    case ACTIVE = 'active';
    case CANCELED = 'canceled';
}
