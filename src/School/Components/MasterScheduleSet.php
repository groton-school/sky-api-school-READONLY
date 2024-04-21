<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $schedule_set_id
 * @property ?string $holiday_label
 * @property ?string $day_label
 * @property ?\Blackbaud\SKY\School\Components\MasterScheduleBlock[] $blocks
 *
 * @api
 */
class MasterScheduleSet extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "schedule_set_id" => "int",
        "holiday_label" => "string",
        "day_label" => "string",
        "blocks" => "\Blackbaud\SKY\School\Components\MasterScheduleBlock[]",
    ];
}
