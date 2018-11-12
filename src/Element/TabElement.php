<?php

namespace Dynamic\Elements\Tabset\Element;

use DNADesign\ElementalList\Model\ElementList;

/**
 * Class TabElement
 * @package Dynamic\Elements\Tabset\Element
 */
class TabElement extends ElementList
{
    /**
     * @var string
     */
    private static $table_name = "TabElement";

    /**
     * @var string
     */
    private static $singular_name = 'Tab';

    /**
     * @var string
     */
    private static $plural_name = 'Tabs';

    /**
     * @var string
     */
    private static $controller_template = 'TabElementHolder';

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
        return _t(__CLASS__ . '.BlockType', 'Tab');
    }

    /**
     * @return bool
     */
    public function First()
    {
        return ($this->Parent()->Elements()->first()->ID === $this->ID);
    }
}
