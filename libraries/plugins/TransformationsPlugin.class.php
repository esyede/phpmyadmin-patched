<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Abstract class for the transformations plugins
 *
 * @package PhpMyAdmin
 */
if (! defined('PHPMYADMIN')) {
    exit;
}

/* It also implements the transformations interface */
require_once 'TransformationsInterface.int.php';

/**
 * Provides a common interface that will have to
 * be implemented by all of the transformations plugins.
 *
 * @package PhpMyAdmin
 */
abstract class TransformationsPlugin implements TransformationsInterface
{
    /**
     * Does the actual work of each specific transformations plugin.
     *
     * @param array $options transformation options
     *
     * @return void
     */
    public function applyTransformationNoWrap($options = array())
    {
        ;
    }

    /**
     * Does the actual work of each specific transformations plugin.
     *
     * @param string $buffer  text to be transformed
     * @param array  $options transformation options
     * @param string $meta    meta information
     *
     * @return string the transformed text
     */
    abstract public function applyTransformation(
        $buffer,
        $options = array(),
        $meta = ''
    );

    /**
     * Returns passed options or default values if they were not set
     *
     * @param string[] $options  List of passed options
     * @param string[] $defaults List of default values
     *
     * @return string[] List of options possibly filled in by defaults.
     */
    public function getOptions($options, $defaults)
    {
        $result = array();
        foreach ($defaults as $key => $value) {
            if (isset($options[$key]) && $options[$key] !== '') {
                $result[$key] = $options[$key];
            } else {
                $result[$key] = $value;
            }
        }
        return $result;
    }
}
