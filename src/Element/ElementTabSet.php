<?php

  namespace Dynamic\Elements\Tabset\Element;

  use DNADesign\ElementalList\Model\ElementList;

  class ElementTabSet extends ElementList {

    private static $table_name = "ElementTabSet";

    private static $singular_name = 'Tabset';
    private static $plural_name = 'Tabsets';

    public function getCMSFields() {
      $fields = parent::getCMSFields();
      $fields->removeByName(['FileTracking', 'LinkTracking']);
      return $fields;
    }

    public function getType() {
      return _t(__CLASS__ . '.BlockType', 'TabSet');
    }

  }
