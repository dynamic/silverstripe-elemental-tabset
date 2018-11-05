<?php

namespace Dynamic\Elements\Tabset\Element;

  use DNADesign\ElementalList\Model\ElementList;

  class TabElement extends ElementList {

    private static $table_name = "TabElement";

    private static $singular_name = 'Tab';
    private static $plural_name = 'Tabs';

    private static $controller_template = 'TabElementHolder';

    public function getCMSFields() {
      $fields = parent::getCMSFields();
      $fields->removeByName(['FileTracking', 'LinkTracking']);
      return $fields;
    }

    public function getType() {
      return _t(__CLASS__ . '.BlockType', 'Tab');
    }

    public function First() {
      return ($this->Parent()->Elements()->first()->ID === $this->ID);
    }

  }
