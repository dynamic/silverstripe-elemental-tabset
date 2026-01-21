<?php

namespace Dynamic\Elements\Tabset\Element;

use DNADesign\ElementalList\Model\ElementList;
use SilverStripe\ORM\FieldType\DBField;

/**
 * Class TabElement
 * @package Dynamic\Elements\Tabset\Element
 */
class TabElement extends ElementList
{
    /**
     * @var string
     */
    private static $icon = 'font-icon-block-layout';

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
     * Set to false to prevent an in-line edit form from showing in an elemental area. Instead the element will be
     * clickable and a GridFieldDetailForm will be used.
     *
     * @config
     * @var bool
     */
    private static $inline_editable = false;

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
     * @return DBHTMLText
     */
    public function getSummary(): string
    {
        if ($this->Elements()->Elements()) {
            $ct = $this->Elements()->Elements()->count();
            if ($ct == 1) {
                $label = ' block';
            } else {
                $label = ' blocks';
            }
            return DBField::create_field(
                'HTMLText',
                $ct . $label
            )->Summary(20);
        }
    }

    /**
     * @return array
     */
    protected function provideBlockSchema()
    {
        $blockSchema = parent::provideBlockSchema();
        $blockSchema['content'] = $this->getSummary();
        return $blockSchema;
    }

    /**
     * @return string
     */
    public function getType(): string
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
