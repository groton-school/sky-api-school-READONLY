<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Section Model
 *
 * @property ?int $id The ID of the section
 * @property string $begin_date The begin date of the course. Uses
 *   [ISO-8601](https://tools.ietf.org/html/rfc3339) (24H) format:
 *   2003-04-21T10:29:43
 * @property ?int $block_id The block ID for a section
 * @property ?string $block_name The block name for a section
 * @property bool $blocks Returns true if the course has blocks
 * @property ?string $building_name The building name
 * @property ?int $changed_sections changed sections
 * @property ?string $course_code The identifier used to reference a course;
 *   the Course Code is a user-entered value
 * @property ?int $course_length The length of a course
 * @property ?string $course_title The title of the course
 * @property ?\Blackbaud\SKY\School\Components\Department[] $departments The
 *   list of departments the section is associated with
 * @property ?string $distinction distinction
 * @property ?int $dropped was the course dropped
 * @property string $duration_begin_date The begin date of the duration. Uses
 *   [ISO-8601](https://tools.ietf.org/html/rfc3339) (24H) format:
 *   2003-04-21T10:29:43
 * @property ?string $duration_description The description of the starting
 *   term of the section
 * @property string $duration_end_date The end date of the duration. Uses
 *   [ISO-8601](https://tools.ietf.org/html/rfc3339) (24H) format:
 *   2003-04-21T10:29:43
 * @property int $duration_id The duration ID for a section
 * @property ?string $duration_name The starting term of the section
 * @property string $end_date The end date of the course. Uses
 *   [ISO-8601](https://tools.ietf.org/html/rfc3339) (24H) format:
 *   2003-04-21T10:29:43
 * @property ?string $faculty_first_name The first name of the head teacher
 * @property ?string $faculty_last_name The last name of the head teacher
 * @property int $level_number level number
 * @property ?string $offering_description The description of an offering type
 * @property ?int $offering_id The ID of an offered course
 * @property ?int $offering_type_id The ID of an offering type
 * @property ?int $room_id The room ID for a section
 * @property ?string $room_name The room name for the section
 * @property ?string $room_number The room number for the section
 * @property ?string $school_year The school year date range in which the
 *   section occurs
 * @property ?string $section_identifier The identifier used to differentiate
 *   between multiple sections that contain a course; the Section Identifier is
 *   a user-entered value
 *
 * @api
 */
class Enrollment extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "begin_date" => "string",
        "block_id" => "int",
        "block_name" => "string",
        "blocks" => "bool",
        "building_name" => "string",
        "changed_sections" => "int",
        "course_code" => "string",
        "course_length" => "int",
        "course_title" => "string",
        "departments" => "\Blackbaud\SKY\School\Components\Department[]",
        "distinction" => "string",
        "dropped" => "int",
        "duration_begin_date" => "string",
        "duration_description" => "string",
        "duration_end_date" => "string",
        "duration_id" => "int",
        "duration_name" => "string",
        "end_date" => "string",
        "faculty_first_name" => "string",
        "faculty_last_name" => "string",
        "level_number" => "int",
        "offering_description" => "string",
        "offering_id" => "int",
        "offering_type_id" => "int",
        "room_id" => "int",
        "room_name" => "string",
        "room_number" => "string",
        "school_year" => "string",
        "section_identifier" => "string",
    ];
}
