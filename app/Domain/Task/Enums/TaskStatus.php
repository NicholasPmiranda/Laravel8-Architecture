<?php

namespace Domain\Task\Enums;

use MyCLabs\Enum\Enum;

class TaskStatus extends Enum
{
    private const COMPLETE = 1;
    private const INCOMPLETE = 0;

    public static function status($value): string
    {
        switch ($value) {
            case self::COMPLETE:
                return 'concluida';
            case self::INCOMPLETE:
                return 'não feita';
            default:
                return 'none';

                 break;

        }
    }
}
