<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Abstract class for the long to IPv4 transformations plugins
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage LongToIPv4
 */
if (! defined('PHPMYADMIN')) {
    exit;
}

/* Get the transformations interface */
require_once 'libraries/plugins/TransformationsPlugin.class.php';

/**
 * Provides common methods for all of the long to IPv4 transformations plugins.
 *
 * @package PhpMyAdmin
 */
abstract class LongToIPv4TransformationsPlugin extends TransformationsPlugin
{
    /**
     * Gets the transformation description of the specific plugin
     *
     * @return string
     */
    public static function getInfo()
    {
        return __(
            'Converts an (IPv4) Internet network address into a string in'
            . ' Internet standard dotted format.'
        );
    }

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
        if ($buffer < 0 || $buffer > 4294967295) {
            return htmlspecialchars($buffer);
        }

        return long2ip($buffer);
    }


    /* ~~~~~~~~~~~~~~~~~~~~ Getters and Setters ~~~~~~~~~~~~~~~~~~~~ */


    /**
     * Gets the transformation name of the specific plugin
     *
     * @return string
     */
    public static function getName()
    {
        return "Long To IPv4";
    }
}
