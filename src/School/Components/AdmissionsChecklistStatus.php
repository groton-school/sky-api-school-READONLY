<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Admissions Checklist Status
 *
 * @property ?int $status_id Identifier for this status
 * @property ?string $status_name Name of the status
 * @property ?int $ordinal Order of the status (lower items are earlier in the
 *   order)
 *
 * @api
 */
class AdmissionsChecklistStatus extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "status_id" => "int",
        "status_name" => "string",
        "ordinal" => "int",
    ];
}
