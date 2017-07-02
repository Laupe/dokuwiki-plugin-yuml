<?php
/**
 * DokuWiki Plugin yuml (Syntax Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Pavel Laupe Dvořák <pavel@laupe.me>
 */

if (!defined('DOKU_INC')) define('DOKU_INC', realpath(dirname(__FILE__) . '/../../') . '/');
if (!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN', DOKU_INC . 'lib/plugins/');

class syntax_plugin_yuml_activitydiagram extends syntax_plugin_yuml
{
    protected $special_pattern = '<activitydiagram.*?>.*?</activitydiagram>';
    protected $handle_pattern = '/<activitydiagram(.*?)>(.*)<\/activitydiagram>/is';
    protected $yuml_type = 'activity';
}