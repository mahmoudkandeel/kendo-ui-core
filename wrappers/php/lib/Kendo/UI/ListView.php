<?php

namespace Kendo\UI;

class ListView extends \Kendo\UI\Widget {
    protected function name() {
        return 'ListView';
    }

    protected function createElement() {
        $tagName = $this->getProperty('tagName');
        if ($tagName == NULL) {
            $tagName = 'div';
        }

        return new \Kendo\Html\Element($tagName);
    }

    public function html() {
        $html = parent::html();

        if ($this->getProperty('pageable')) {
            $pager = new \Kendo\Html\Element('div');
            $pager->attr('id', $this->id . '_pager');


            $html .= $pager->outerHtml();
        }

        return $html;
    }

    public function properties() {
        $properties = parent::properties();

        //remove tagName from init script
        unset($properties['tagName']);

        //adjust pager settings
        if ($this->getProperty('pageable')) {
            $properties['pageable'] = array('pagerId' => $this->id . '_pager');
        }

        return $properties;
    }

//>> Properties

    /**
    * Indicates whether the list view will call read on the DataSource initially.
    * @param boolean $value
    * @return \Kendo\UI\ListView
    */
    public function autoBind($value) {
        return $this->setProperty('autoBind', $value);
    }

    /**
    * Sets the data source of the ListView.
    * @param array|\Kendo\Data\DataSource $value
    * @return \Kendo\UI\ListView
    */
    public function dataSource($value) {
        return $this->setProperty('dataSource', $value);
    }

    /**
    * Indicates whether keyboard navigation is enabled/disabled.
    * @param boolean $value
    * @return \Kendo\UI\ListView
    */
    public function navigatable($value) {
        return $this->setProperty('navigatable', $value);
    }

    /**
    * Indicates whether selection is enabled/disabled. Possible values:
    * @param string $value
    * @return \Kendo\UI\ListView
    */
    public function selectable($value) {
        return $this->setProperty('selectable', $value);
    }

    /**
    * Sets the template option of the ListView.
    * The id of the template used for rendering the items in the listview.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\ListView
    */
    public function templateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('template', $value);
    }

    /**
    * Sets the template option of the ListView.
    * The id of the template used for rendering the items in the listview.
    * @param string $value The template content.
    * @return \Kendo\UI\ListView
    */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

    /**
    * Sets the editTemplate option of the ListView.
    * Specifies ListView item template in edit mode.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\ListView
    */
    public function editTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('editTemplate', $value);
    }

    /**
    * Sets the editTemplate option of the ListView.
    * Specifies ListView item template in edit mode.
    * @param string $value The template content.
    * @return \Kendo\UI\ListView
    */
    public function editTemplate($value) {
        return $this->setProperty('editTemplate', $value);
    }

    /**
    * Sets the altTemplate option of the ListView.
    * Template to be used for rendering the alternate items in the listview.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\ListView
    */
    public function altTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('altTemplate', $value);
    }

    /**
    * Sets the altTemplate option of the ListView.
    * Template to be used for rendering the alternate items in the listview.
    * @param string $value The template content.
    * @return \Kendo\UI\ListView
    */
    public function altTemplate($value) {
        return $this->setProperty('altTemplate', $value);
    }

    /**
    * Indicates whether paging is enabled/disabled.
    * @param boolean $value
    * @return \Kendo\UI\ListView
    */
    public function pageable($value) {
        return $this->setProperty('pageable', $value);
    }

    /**
    * Specifies ListView wrapper element tag name.
    * @param string $value
    * @return \Kendo\UI\ListView
    */
    public function tagName($value) {
        return $this->setProperty('tagName', $value);
    }

    /**
    * Sets the cancel event of the ListView.
    * Raised when the user clicks the "cancel" button.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\ListView
    */
    public function cancel($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('cancel', $value);
    }

    /**
    * Sets the change event of the ListView.
    * Fires when the list view selection has changed.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\ListView
    */
    public function change($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('change', $value);
    }

    /**
    * Sets the dataBound event of the ListView.
    * Fires when the list view has received data from the data source.
and is about to render it.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\ListView
    */
    public function dataBound($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('dataBound', $value);
    }

    /**
    * Sets the dataBinding event of the ListView.
    * Fires when the grid is about to be rendered.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\ListView
    */
    public function dataBinding($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('dataBinding', $value);
    }

    /**
    * Sets the edit event of the ListView.
    * Fires when the list view enters edit mode.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\ListView
    */
    public function edit($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('edit', $value);
    }

    /**
    * Sets the remove event of the ListView.
    * Fires before the list view item is removed.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\ListView
    */
    public function remove($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('remove', $value);
    }


//<< Properties
}

?>
