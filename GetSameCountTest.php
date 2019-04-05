<?php
declare(strict_types=1);

namespace test;

use PHPUnit\Framework\TestCase;

/**
 * Class GetTest
 */
class GetSameCountTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param       $array1
     * @param       $array2
     * @param       $expected
     */
    public function testGetFunctionality(array $array1, array $array2, int $expected): void
    {
        require_once __DIR__ . '/16.php';
        $this::assertSame($expected, getSameCount($array1, $array2));
    }

    /** data provider
     *
     * @return array
     */
    public function dataProvider(): array
    {
        return [
            [[], [], 0],
            [[1, 10, 3], [10, 100, 35, 1], 2],
            [[1, 3, 2, 2], [3, 1, 1, 2], 3],
        ];
    }
}
