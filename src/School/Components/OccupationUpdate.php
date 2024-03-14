<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?string $business_name Name of the employing business
 * @property ?string $job_title Employed individuals job title
 * @property ?string $business_url Url of the employing business
 * @property ?string $industry Industry of the employing business
 * @property ?string $organization Maps to the employee's 'Organization' field
 * @property ?string $occupation Maps to the employee's 'Profession' field
 * @property ?string $matching_gift Indicates if employer matches employee
 *   donations. Allowed values: Yes, No, No Answer
 * @property ?string $begin_date Employees start date at this business
 * @property ?string $end_date Employees end date at this business
 * @property ?string $specialty Maps to the employee's 'Specialty' field
 * @property ?string $parent_company Parent company of employing business
 * @property ?string $job_function Description of the work done by the
 *   employee
 * @property ?string $years_employed Number of years employee has been at this
 *   business
 * @property ?bool $currently_employed Indicates if this is the individuals
 *   current employer
 *
 * @api
 */
class OccupationUpdate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "business_name" => "string",
        "job_title" => "string",
        "business_url" => "string",
        "industry" => "string",
        "organization" => "string",
        "occupation" => "string",
        "matching_gift" => "string",
        "begin_date" => "string",
        "end_date" => "string",
        "specialty" => "string",
        "parent_company" => "string",
        "job_function" => "string",
        "years_employed" => "string",
        "currently_employed" => "bool",
    ];
}
