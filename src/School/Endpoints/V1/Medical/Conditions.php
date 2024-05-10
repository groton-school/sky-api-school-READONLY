<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Medical;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\StudentConditionUpdate;
use Blackbaud\SKY\School\Components\StudentMedicalCondition;

/**
 * @api
 */
class Conditions extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/medical/conditions/{condition_id}";

    /**
     * Delete a medical condition for a student.
     *
     *  Requires one of the following roles in the Education Management
     * system:
     *
     * - Nurse
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param array{condition_id: int} $params An associative array
     *     - condition_id: Format - int32. The ID of the student's condition.
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByConditionId(array $params): int
    {
        assert(isset($params['condition_id']), new ArgumentException("Parameter `condition_id` is required"));

        return $this->send("delete", array_filter($params, fn($key) => in_array($key, ['condition_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY));
    }

    /**
     * Update a medical condition for a student.
     *
     *  Requires one of the following roles in the Education Management
     * system:
     *
     * - Nurse
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param array{condition_id: int} $params An associative array
     *     - condition_id: Format - int32. The ID of the student's condition.
     * @param \Blackbaud\SKY\School\Components\StudentConditionUpdate
     *   $requestBody The condition changes
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnConditionId(array $params, StudentConditionUpdate $requestBody): int
    {
        assert(isset($params['condition_id']), new ArgumentException("Parameter `condition_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['condition_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), $requestBody);
    }

    /**
     * Creates a condition for a student.
     *
     *  Returns the newly created ID.
     *
     *  Requires one of the following roles in the Education Management
     * system:
     *
     * - Nurse
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param \Blackbaud\SKY\School\Components\StudentMedicalCondition
     *   $requestBody The medical condition to be created for student
     *
     * @return int ID of the student medical condition just created.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(StudentMedicalCondition $requestBody): int
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), $requestBody);
    }
}
