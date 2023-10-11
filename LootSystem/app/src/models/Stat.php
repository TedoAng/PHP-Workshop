<?php

namespace App\Src\Models;

use App\Src\Common\StatType;
use App\Src\Models\StatInterface;

class Stat implements StatInterface
{
    private $value;
    private $type;

    public function __construct($type, $value)
    {
        if (!$type instanceof StatType) {
            throw new \Exception("Invalid stat type!");
        }
        if (!is_numeric($value) || $value < 0) {
            throw new \Exception("Invalid stat value!");
        }
        $this->value = $value;
        $this->type = $type;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($value)
    {
        $this->type = $value;
    }
}