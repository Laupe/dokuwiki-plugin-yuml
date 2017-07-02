<?php
/**
 * DokuWiki Plugin yuml (Syntax Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Pavel Laupe Dvořák <pavel@laupe.me>
 */

if (!defined('DOKU_INC')) define('DOKU_INC', realpath(dirname(__FILE__) . '/../../') . '/');
if (!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN', DOKU_INC . 'lib/plugins/');

class syntax_plugin_yuml_usecase extends syntax_plugin_yuml
{
    protected $special_pattern = '<usecase.*?>.*?</usecase>';
    protected $handle_pattern = '/<usecase(.*?)>(.*)<\/usecase>/is';
    protected $yuml_type = 'usecase';
}