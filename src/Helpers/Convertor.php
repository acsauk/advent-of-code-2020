<?php declare(strict_types=1);


namespace App\Helpers;


class Convertor
{
    public static function newlineStringListToArray(string $newlineList): array
    {
        $arrayWithWhitespace = preg_split("/\r\n|\n|\r/", trim($newlineList));
        return array_map(function($value) { return trim($value); }, $arrayWithWhitespace);
    }

    public static function intStringsToIntArray(array $intStrings): array
    {
        return array_map('intval', $intStrings);
    }

    public static function passwordRuleStringToObject(string $ruleAndPasswordString): PasswordAndRule
    {
//        ['1-3 a: abcde'];
        $rules = explode(' ', $ruleAndPasswordString);
        $range = explode('-', $rules[0]);

        return (new PasswordAndRule())
            ->setMinRule(intval($range[0]))
            ->setMaxRule(intval($range[1]))
            ->setRuleLetter(str_replace(':', '', $rules[1]))
            ->setPassword($rules[2]);
    }
}
