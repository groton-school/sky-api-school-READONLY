<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Used to create an emergency contact for a user.
 *
 * @property int $automated_email The value to be used for the automated email
 *   field. 0 = Never, 1 = Every Time, 2 = Emergency Only
 * @property int $call_dialer The value to be used for the automated call
 *   dialer field. 0 = Never, 1 = Every Time, 2 = Emergency Only
 * @property ?string $email The email address for the emergency contact
 * @property ?string $phone_number The phone number for the emergency contact
 *
 * @api
 */
class EmergencyContactUserCreate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "automated_email" => "int",
        "call_dialer" => "int",
        "email" => "string",
        "phone_number" => "string",
    ];
}
