<?php
namespace Ds\Tests;

use Ds\Collection;

class QueueTest extends CollectionTest
{
    use Queue\__construct;
    use Queue\_clone;
    use Queue\_echo;
    use Queue\_empty;
    use Queue\_foreach;
    use Queue\_isset;
    use Queue\_jsonEncode;
    use Queue\_list;
    use Queue\_serialize;
    use Queue\_unset;
    use Queue\_var_dump;
    use Queue\clear;
    use Queue\copy;
    use Queue\count;
    use Queue\isEmpty;
    use Queue\peek;
    use Queue\pop;
    use Queue\push;
    use Queue\toArray;

    public function getInstance(array $values = [])
    {
        return new \Ds\Queue($values);
    }

    public function testArrayAccessSet()
    {
        $set = $this->getInstance();
        $this->expectOutOfBoundsException();
        $set['a'] = 1;
    }
}
