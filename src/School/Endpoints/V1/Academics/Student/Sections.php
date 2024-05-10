<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics\Student;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\AcademicsSectionStudentCollection;

/**
 * @api
 */
class Sections extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/student/{student_id}/sections";

    /**
     * Returns a collection of sections for the specified ```student\_id```.
     *
     *  The user requesting the information must be the student, parent of the
     * student or faculty member associated with the student.
     *
     *  The ```cumulative\_gade``` is shown if the user has the correct access
     * to view it.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Student
     *
     * - Parent
     *
     * - Faculty
     *
     * @param array{student_id: int} $params An associative array
     *     - student_id: Format - int32. The ID of the student to view
     *   sections and grades for.
     *
     * @return \Blackbaud\SKY\School\Components\AcademicsSectionStudentCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByStudentId(array $params): AcademicsSectionStudentCollection
    {
        assert(isset($params['student_id']), new ArgumentException("Parameter `student_id` is required"));

        return new AcademicsSectionStudentCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['student_id']), ARRAY_FILTER_USE_KEY), []));
    }
}
