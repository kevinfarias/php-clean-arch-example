<?php

namespace Core\Domain\Validation;

use Core\Domain\Exception\EntityValidationException;

class DomainValidation
{
    public static function notNull(string $value, string $exceptMessage = null)
    {
        if (empty($value)) {
            throw new EntityValidationException($exceptMessage ?? 'Should not be empty or null');
        }
    }

    public static function strMaxLength(string $value, int $maxLength = 255, string $exceptMessage = null)
    {
        if (strlen($value) >= $maxLength) {
            throw new EntityValidationException($exceptMessage ?? "The maximum length is {$value}");
        }
    }

    public static function strMinLength(string $value, int $minLength = 3, string $exceptMessage = null)
    {
        if (strlen($value) < $minLength) {
            throw new EntityValidationException($exceptMessage ?? "The minimum length is {$minLength}");
        }
    }
}