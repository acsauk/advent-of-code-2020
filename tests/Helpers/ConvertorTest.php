<?php


use App\Helpers\Convertor;
use PHPUnit\Framework\TestCase;

class ConvertorTest extends TestCase
{
    /**
     * @dataProvider newlineListProvider
     * @test
     */
    public function newlineStringListToArray(string $newlineList, array $expectedArray)
    {
        self::assertSame($expectedArray, Convertor::newlineStringListToArray($newlineList));
    }

    public function newlineListProvider()
    {
        return [
            'List with no blank lines' => [
                "1
                 2
                 3",
                ['1','2','3']
            ],
            'List with blank lines' => [
                "
                1
                 2
                 3
                 ",
                ['1','2','3']
            ]
        ];
    }

    /** @test */
    public function intStringsToIntArray()
    {
        self::assertEquals([1, 2, 3], Convertor::intStringsToIntArray(['1','2','3']));
    }

    /** @test */
    public function passwordRuleStringToObject()
    {
        $ruleString = '1-3 a: abcde';
        $actualPasswordRule = Convertor::passwordRuleStringToObject($ruleString);

        self::assertEquals(1, $actualPasswordRule->getMinRule());
        self::assertEquals(3, $actualPasswordRule->getMaxRule());
        self::assertEquals('a', $actualPasswordRule->getRuleLetter());
        self::assertEquals('abcde', $actualPasswordRule->getPassword());
    }
}
