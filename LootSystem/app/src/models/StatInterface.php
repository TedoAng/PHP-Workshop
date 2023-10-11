<?php

namespace App\Src\Models;

interface StatInterface
{
    public function getValue();
    public function setValue($value);
    public function getType();
    public function setType($value);
}