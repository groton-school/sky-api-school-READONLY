<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * EducationUpdate Model
 *
 * @property ?string $school The name of the school.
 * @property ?string $degree The degree or diploma earned.
 * @property ?string $major The major declared for the degree.
 * @property ?string $field The field of study at the school.
 * @property ?string $grad_year The graduation year.
 * @property ?string $sort_order The order to list the school.
 *
 * @api
 */
class EducationUpdate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "school" => "string",
        "degree" => "string",
        "major" => "string",
        "field" => "string",
        "grad_year" => "string",
        "sort_order" => "string",
    ];
}
