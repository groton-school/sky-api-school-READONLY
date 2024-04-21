<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * User Enrollment
 *
 * @property ?int $user_id The id of the user
 * @property ?string $firstname The first name of the user
 * @property ?string $lastname The last name of the user
 * @property ?string $preferred_name The preferred name of the user
 * @property ?string $name The formatted name of the user
 * @property ?string $school_year The school year the user is enrolled in
 * @property \Blackbaud\SKY\School\Components\Level $school_level Level Model
 * @property \Blackbaud\SKY\School\Components\GradeLevel $grade_level
 *   GradeLevel Model
 * @property ?bool $repeated Returns true if the user repeated this enrollment
 * @property ?bool $graduated Returns true if the user graduated after
 *   completing this enrollment year
 * @property ?string $enroll_date The date the enrollment begins
 * @property ?string $depart_date The date the user departed the school year,
 *   ending the enrollment
 * @property ?string $depart_reason The reason the user departed the school
 * @property ?string $session The name of the session, if a session is
 *   attached to the enrollment
 *
 * @api
 */
class UserEnrollment extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user_id" => "int",
        "firstname" => "string",
        "lastname" => "string",
        "preferred_name" => "string",
        "name" => "string",
        "school_year" => "string",
        "school_level" => "\Blackbaud\SKY\School\Components\Level",
        "grade_level" => "\Blackbaud\SKY\School\Components\GradeLevel",
        "repeated" => "bool",
        "graduated" => "bool",
        "enroll_date" => "string",
        "depart_date" => "string",
        "depart_reason" => "string",
        "session" => "string",
    ];
}
