<?php
namespace App\Src\Common;

enum StatType
{
  case DAMAGE;
  case HEALTH;
  case INTELLIGENCE;
  case STRENGTH;
  case CRIT_CHANCE;
  case CRIT_DAMAGE;
}