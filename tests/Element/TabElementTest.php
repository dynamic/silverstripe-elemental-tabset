<?php

namespace Dynamic\Elements\Test;

use Dynamic\Elements\Tabset\Element\TabElement;
use SilverStripe\Dev\SapphireTest;
use SilverStripe\Forms\FieldList;

class TabElementTest extends SapphireTest
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
        $object = $this->objFromFixture(TabElement::class, 'one');
        $fields = $object->getCMSFields();
        $this->assertInstanceOf(FieldList::class, $fields);
    }
}
