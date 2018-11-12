<?php

namespace Dynamic\Elements\Test;

use Dynamic\Elements\Tabset\Element\ElementTabSet;
use SilverStripe\Dev\SapphireTest;
use SilverStripe\Forms\FieldList;

class ElementTabSetTest extends SapphireTest
{
    /**
     * @var string
     */
    protected static $fixture_file = '../fixtures.yml';

    /**
     *
     */
    public function testGetCMSFields()
    {
        $object = $this->objFromFixture(ElementTabSet::class, 'one');
        $fields = $object->getCMSFields();
        $this->assertInstanceOf(FieldList::class, $fields);
    }
}
