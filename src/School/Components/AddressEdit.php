<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * AddressEdit Model
 *
 * @property int $id The ID of the address
 * @property ?string $city The city for the address
 * @property ?string $country The country for the address
 * @property ?string $line_one The first line of the address
 * @property ?string $line_two The second line of the address
 * @property ?string $line_three The third line of the address
 * @property bool $mailing_address Returns True if user accepts mail from the
 *   address
 * @property ?string $postal_code The postal code for the address
 * @property bool $primary Returns true if the address is primary
 * @property ?string $province The province for the address
 * @property ?string $region The region for the address
 * @property ?string $state The state for the address
 * @property ?int $type_id The type ID associated with an address that is
 *   based upon a user's primary relationship to the address
 * @property ?int $user_id The ID of the user of the address
 * @property ?\Blackbaud\SKY\School\Components\AddressTypeLink[] $links
 *   Returns each instance of an address type for each relationship to the user

 *
 * @api
 */
class AddressEdit extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "city" => "string",
        "country" => "string",
        "line_one" => "string",
        "line_two" => "string",
        "line_three" => "string",
        "mailing_address" => "bool",
        "postal_code" => "string",
        "primary" => "bool",
        "province" => "string",
        "region" => "string",
        "state" => "string",
        "type_id" => "int",
        "user_id" => "int",
        "links" => "\Blackbaud\SKY\School\Components\AddressTypeLink[]",
    ];
}
