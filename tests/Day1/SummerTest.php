<?php

namespace Tests;

use App\Day1\Summer;
use PHPUnit\Framework\TestCase;

class SummerTest extends TestCase
{
    /** @test */
    public function findTwoNumbersInArrayThatSumTo()
    {
        $numberArray = [6, 2, 8, 10];
        $expectedResult = [8, 10];
        $actualResult = Summer::findTwoNumbersInArrayThatSumTo($numberArray, 18);

        self::assertEquals($expectedResult, $actualResult);
    }

    /** @test */
    public function findThreeNumbersInArrayThatSumTo()
    {
        $numberArray = [6, 2, 8, 10, 1];
        $expectedResult = [8, 10, 1];
        $actualResult = Summer::findThreeNumbersInArrayThatSumTo($numberArray, 19);

        self::assertEquals($expectedResult, $actualResult);
    }
}
