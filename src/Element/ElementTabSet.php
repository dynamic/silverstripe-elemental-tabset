<?php

namespace Dynamic\Elements\Tabset\Element;

use DNADesign\ElementalList\Model\ElementList;
use SilverStripe\ORM\FieldType\DBField;

/**
 * Class ElementTabSet
 * @package Dynamic\Elements\Tabset\Element
 */
class ElementTabSet extends ElementList
{
    /**
     * @var string
     */
    private static $icon = 'font-icon-block-layout';

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
        if ($this->Elements()) {
            $ct = $this->Elements()->Elements()->count();
            if ($ct == 1) {
                $label = ' tab';
            } else {
                $label = ' tabs';
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
        return _t(__CLASS__ . '.BlockType', 'TabSet');
    }
}
