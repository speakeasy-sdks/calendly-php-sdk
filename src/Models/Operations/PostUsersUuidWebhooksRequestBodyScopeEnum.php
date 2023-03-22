<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/** Indicates if the webhook subscription scope will be "organization" or "user" */
enum PostUsersUuidWebhooksRequestBodyScopeEnum: string
{
    case ORGANIZATION = 'organization';
    case USER = 'user';
}
