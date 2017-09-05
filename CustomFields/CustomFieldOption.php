<?php

namespace SumoCoders\Teamleader\CustomFields;

/**
 * Class CustomFieldOption
 * @package SumoCoders\Teamleader\CustomFields
 * @author  Nico Verbruggen <nico@underlined.be>
 */

class CustomFieldOption
{
    /**
     * CustomFieldOption constructor.
     * @param $id
     * @param $value
     */
    public function __construct($id, $value)
    {
        $this->id = $id;
        $this->value = $value;
    }

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $value;

    public function getId()
    {
        return $this->id;
    }

    public function getValue()
    {
        return $this->value;
    }
}