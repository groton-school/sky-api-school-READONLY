<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * GradeLevel Model
 *
 * @property ?int $id The ID of a grade level
 * @property ?bool $active Returns true if the grade level is active
 * @property ?string $description The description of the grade level
 * @property ?string $abbreviation The abbreviation of the grade level
 * @property ?string $name The label used to identify a grade level
 * @property ?int $promote_to_code Returns integer value denoting what
 *   promotion a student receives when completing this grade, 1 = Promoted to
 *   next grade level, 2 = Graduate, 3 = No action
 *
 * @api
 */
class GradeLevel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "active" => "bool",
        "description" => "string",
        "abbreviation" => "string",
        "name" => "string",
        "promote_to_code" => "int",
    ];
}
