<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Activities\Sections;

/**
 * Routing class for the subnamespace `Activities`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Activities\Sections $sections
 *
 * @api
 */
class Activities extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "sections" => "\Blackbaud\SKY\School\Endpoints\V1\Activities\Sections",
    ];

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Activities\Sections $_sections
     */
    protected Sections $_sections = null;
}
