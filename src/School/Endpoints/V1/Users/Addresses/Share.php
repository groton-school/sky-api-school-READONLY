<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users\Addresses;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\AddressShare;

/**
 * @api
 */
class Share extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/addresses/share";

    /**
     * For an existing user, create a link to an existing address.
     *
     *  Returns the ID of the address just shared.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Contact Card Manager
     *
     * - Platform Manager
     *
     * - SKY API Data Sync
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user the existing address
     *   should be shared.
     * @param \Blackbaud\SKY\School\Components\AddressShare $requestBody The
     *   details about the address that should be shared with the user.
     *
     * @return int ID of the address just shared.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postToUserId(array $params, AddressShare $requestBody): int
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", array_filter($params, fn($key) => in_array($key, ['user_id']), ARRAY_FILTER_USE_KEY), [], $requestBody);
    }
}
