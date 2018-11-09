<?php

namespace Dynamic\Elements\Tabset\Element;

use DNADesign\ElementalList\Model\ElementList;

/**
 * Class ElementTabSet
 * @package Dynamic\Elements\Tabset\Element
 */
class ElementTabSet extends ElementList
{
    /**
     * @var string
     */
    private static $table_name = "ElementTabSet";

    /**
     * @var string
     */
    private static $singular_name = 'Tabset';

    /**
     * @var string
     */
    private static $plural_name = 'Tabsets';

    /**
     * @return \SilverStripe\Forms\FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->removeByName([
            'FileTracking',
            'LinkTracking'
        ]);

        return $fields;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'TabSet');
    }
}
