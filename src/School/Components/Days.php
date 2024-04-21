<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Days for medication
 *
 * @property bool $sunday Set to true to dispense medication on sunday.
 *   Allowed values: true, false
 * @property bool $monday Set to true to dispense medication on monday.
 *   Allowed values: true, false
 * @property bool $tuesday Set to true to dispense medication on tuesday.
 *   Allowed values: true, false
 * @property bool $wednesday Set to true to dispense medication on wednesday.
 *   Allowed values: true, false
 * @property bool $thursday Set to true to dispense medication on thursday.
 *   Allowed values: true, false
 * @property bool $friday Set to true to dispense medication on friday.
 *   Allowed values: true, false
 * @property bool $saturday Set to true to dispense medication on saturday.
 *   Allowed values: true, false
 *
 * @api
 */
class Days extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "sunday" => "bool",
        "monday" => "bool",
        "tuesday" => "bool",
        "wednesday" => "bool",
        "thursday" => "bool",
        "friday" => "bool",
        "saturday" => "bool",
    ];
}
