<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Abstract class for syntax highlighted editors using CodeMirror
 *
 * @package PhpMyAdmin-Transformations
 */
if (! defined('PHPMYADMIN')) {
    exit;
}

/* Get the transformations class */
require_once 'libraries/plugins/IOTransformationsPlugin.class.php';

/**
 * Provides common methods for all the CodeMirror syntax highlighted editors
 *
 * @package PhpMyAdmin-Transformations
 */
abstract class CodeMirrorEditorTransformationsPlugin extends IOTransformationsPlugin
{
    /**
     * Does the actual work of each specific transformations plugin.
     *
     * @param string $buffer  text to be transformed
     * @param array  $options transformation options
     * @param string $meta    meta information
     *
     * @return string
     */
    public function applyTransformation($buffer, $options = array(), $meta = '')
    {
        return $buffer;
    }

    /**
     * Returns the html for input field to override default textarea.
     * Note: Return empty string if default textarea is required.
     *
     * @param array  $column               column details
     * @param int    $row_id               row number
     * @param string $column_name_appendix the name attribute
     * @param array  $options              transformation options
     * @param string $value                Current field value
     * @param string $text_dir             text direction
     *
     * @return string the html for input field
     */
    public function getInputHtml(
        $column,
        $row_id,
        $column_name_appendix,
        $options,
        $value,
        $text_dir
    ) {
        $html = '';
        if (! empty($value)) {
            $html = '<input type="hidden" name="fields_prev' . $column_name_appendix
            . '" value="' . htmlspecialchars($value) . '"/>';
        }
        $class = 'transform_' . strtolower(static::getName()) . '_editor';
        $html .= '<textarea name="fields' . $column_name_appendix . '"'
            . ' dir="' . $text_dir . '" class="' . $class . '">'
            . htmlspecialchars($value) . '</textarea>';
        return $html;
    }
}
