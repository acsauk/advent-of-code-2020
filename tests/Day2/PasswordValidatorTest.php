<?php declare(strict_types=1);


namespace Tests;

use App\Day2\PasswordValidator;
use PHPUnit\Framework\TestCase;

class PasswordValidatorTest extends TestCase
{
    /**
     * @test
     * @dataProvider passwordArrayProviderV1
     */
    public function isPasswordValidV1(string $ruleAndPassword, bool $isValid)
    {
        self::assertEquals($isValid, PasswordValidator::isPasswordValidV1($ruleAndPassword));
    }

    public function passwordArrayProviderV1()
    {
        return [
            'Valid 1' => ['1-3 a: abcde', true],
            'Invalid' => ['1-3 b: cdefg', false],
            'Valid 2' => ['2-9 c: ccccccccc', true],
            'Valid 3' => ['6-8 b: bbbnvbbb', true],
            'Valid 4' => ['6-10 z: zhzzzzfzzzzzzzzzpzz', false],
        ];
    }

    /**
     * @test
     * @dataProvider passwordArrayProviderV2
     */
    public function isPasswordValidV2(string $ruleAndPassword, bool $isValid)
    {
        self::assertEquals($isValid, PasswordValidator::isPasswordValidV2($ruleAndPassword));
    }

    public function passwordArrayProviderV2()
    {
        return [
            'Valid 1' => ['1-3 a: abcde', true],
            'Invalid 1' => ['1-3 b: cdefg', false],
            'Invalid 2' => ['2-9 c: ccccccccc', false],
            'Invalid 3' => ['6-8 b: bbbnvbbb', false],
            'Invalid 4' => ['6-10 z: zhzzzzfzzzzzzzzzpzz', false],
            'Invalid 5' => ['5-6 x: qhxxxx', false],
            'Valid 2' => ['11-20 d: rgddnnddkjdnccrrxdsw', true],
        ];



    }
}
