<?php
namespace Ds\Tests\Map;

trait first
{
    public function firstDataProvider()
    {
        // initial, returned
        return [
            [['a'],             [0, 'a']],
            [['a', 'b'],        [0, 'a']],
            [['a', 'b', 'c'],   [0, 'a']],
        ];
    }

    /**
     * @dataProvider firstDataProvider
     */
    public function testFirst(array $initial, $expected)
    {
        $instance = $this->getInstance($initial);
        $first = $instance->first();

        $this->assertEquals($expected, [$first[0], $first[1]]);
    }

    public function testFirstNowAllowedWhenEmpty()
    {
        $instance = $this->getInstance();
        $this->expectEmptyNotAllowedException();
        $instance->first();
    }
}
