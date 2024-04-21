<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Medical;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\StudentAthleticRequirementUpdate;
use string;

/**
 * @api
 */
class Athleticclearance extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/medical/athleticclearance";

    /**
     * Updates a medical athletic requirements for a student.
     *
     *  Requires one of the following roles in the Education Management
     * system:
     *
     * - Nurse
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param \Blackbaud\SKY\School\Components\StudentAthleticRequirementUpdate
     *   $requestBody The athletics requirements to update
     *
     * @return string[] Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(StudentAthleticRequirementUpdate $requestBody): array
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return array_map(fn($a) => new string($a), $this->send("post", [], [], $requestBody));
    }
}
