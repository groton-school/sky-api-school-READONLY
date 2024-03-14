<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Advisor Model
 *
 * @property ?int $id The user ID for the advisor
 * @property ?bool $head The head advisor indicator
 * @property ?string $name The firstname and lastname of the advisor
 *
 * @api
 */
class Advisor extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "head" => "bool",
        "name" => "string",
    ];
}
