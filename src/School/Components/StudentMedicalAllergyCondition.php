<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Student medical allergy/condition
 *
 * @property int $user_id The ID of the student
 * @property string $type The type of record to create. Allowed values:
 *   allergy, condition
 * @property string $allergy_condition_type The ID or description of the
 *   allergy or condition.
 * @property string $date_as_of The date the allergy or condition began. Use
 *   format ... Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property ?string $date_until The date the allergy or condition ended. Use
 *   format ... Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property ?string $allergy_signs The signs of an allergic reaction
 * @property ?string $minor_reaction_response The response for a minor
 *   allergic reaction
 * @property ?string $major_reaction_response The response for a major
 *   allergic reaction
 * @property ?\Blackbaud\SKY\School\Components\MedicalSecurityRole[]
 *   $role_access Array of roles
 * @property ?int[] $medications Array of medication IDs
 *
 * @api
 */
class StudentMedicalAllergyCondition extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user_id" => "int",
        "type" => "string",
        "allergy_condition_type" => "string",
        "date_as_of" => "string",
        "date_until" => "string",
        "allergy_signs" => "string",
        "minor_reaction_response" => "string",
        "major_reaction_response" => "string",
        "role_access" => "\Blackbaud\SKY\School\Components\MedicalSecurityRole[]",
        "medications" => "int[]",
    ];
}
