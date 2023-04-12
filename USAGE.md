<!-- Start SDK Example Usage -->
```php
<?php

declare(strict_types=1);

use calendly\calendly\SDK;
use \calendly\calendly\Models\Shared\Security;
use \calendly\calendly\Models\Operations\ListScheduledEventsRequest;
use \calendly\calendly\Models\Operations\ListScheduledEventsStatusEnum;

$security = new Security();
$security->oauth2 = 'Bearer YOUR_ACCESS_TOKEN_HERE';

$sdk = SDK::builder()
    ->setSecurity($security);
    ->build();

try {
    $request = new ListScheduledEventsRequest();
    $request->count = 5488.14;
    $request->inviteeEmail = 'alice@example.com';
    $request->maxStartTime = 'provident';
    $request->minStartTime = 'distinctio';
    $request->organization = 'https://api.calendly.com/organizations/EBHAAFHDCAEQTSEZ';
    $request->pageToken = 'quibusdam';
    $request->sort = 'unde';
    $request->status = ListScheduledEventsStatusEnum::CANCELED;
    $request->user = 'https://api.calendly.com/users/EBHAAFHDCAEQTSEZ';

    $response = $sdk->scheduledEvents->list($request);

    if ($response->listScheduledEvents200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->