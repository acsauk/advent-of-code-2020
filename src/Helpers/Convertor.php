<?php declare(strict_types=1);


namespace App\Helpers;


class Convertor
{
    public static function intStringsToIntArray(array $intStrings): array
    {
        return array_map('intval', $intStrings);
    }

    public static function newlineStringListToArray(string $newlineList): array
    {
        return preg_split("/\r\n|\n|\r/", trim($newlineList));
    }
}
