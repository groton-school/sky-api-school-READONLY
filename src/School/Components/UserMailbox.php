<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * An object for mailbox information
 *
 * @property ?string $number The mailbox number of the user.
 * @property ?string $combo The mailbox combination of the user.
 *
 * @api
 */
class UserMailbox extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "number" => "string",
        "combo" => "string",
    ];
}
