<?php
/**
 * DokuWiki Plugin yuml (Syntax Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Pavel Laupe Dvořák <pavel@laupe.me>
 */

if (!defined('DOKU_INC')) define('DOKU_INC', realpath(dirname(__FILE__) . '/../../') . '/');
if (!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN', DOKU_INC . 'lib/plugins/');

class syntax_plugin_yuml_usecase extends DokuWiki_Syntax_Plugin
{
    protected $special_pattern = '<usecase.*?>.*?</usecase>';
    protected $handle_pattern = '/<usecase(.*?)>(.*)<\/usecase>/is';
    protected $yuml_type = 'usecase';

    /**
     * Get the type of syntax this plugin defines.
     *
     * @param none
     * @return string Syntax mode type
     */
    public function getType()
    {
        return 'substition';
    }

    /**
     * @return string Paragraph type
     */
    public function getPType()
    {
        return 'normal';
    }

    /**
     * Where to sort in?
     *
     * @param none
     * @return int Sort order - Low numbers go before high numbers
     */
    public function getSort()
    {
        return 999;
    }

    /**
     * Connect lookup pattern to lexer.
     *
     * @param string $mode Parser mode
     * @return void
     */
    public function connectTo($mode)
    {
        $this->Lexer->addSpecialPattern($this->special_pattern, $mode, 'plugin_yuml_' . $this->getPluginComponent());
    }

    /**
     * Handle matches of the yuml syntax
     *
     * @param string $match The match of the syntax
     * @param int $state The state of the handler
     * @param int $pos The position in the document
     * @param Doku_Handler $handler The handler
     * @return array Data for the renderer
     */
    public function handle($match, $state, $pos, Doku_Handler $handler)
    {
        if ($state != DOKU_LEXER_SPECIAL) return array();

        // Look for style
        $result = array();
        preg_match($this->handle_pattern, $match, $result);

        $style = $result[1];
        $match = $result[2];

        return array($state, $match, $style);
    }

    /**
     * Render xhtml output or metadata
     *
     * @param string $mode Renderer mode (supported modes: xhtml)
     * @param Doku_Renderer $renderer The renderer
     * @param array $data The data from the handler() function
     * @return bool If rendering was successful.
     */
    public function render($mode, Doku_Renderer $renderer, $data)
    {
        if ($mode != 'xhtml') return false;

        list($state, $match, $style) = $data;

        if ($state == DOKU_LEXER_SPECIAL) {
            $renderer->doc .= $this->getYumlIMG($this->yuml_type, $match, $style);
        }

        return true;
    }

    public function getYumlIMG($type, $uml_code, $style = null)
    {
        if ($style == null) {
            $style = "plain";
        }
        $uml_code = preg_replace(array("/\n/", "/,,/"), array(", ", ","), trim($uml_code));
        $output = '<img src="https://yuml.me/diagram/' . trim($style) . '/' . $type . '/';
        return $output . htmlspecialchars($uml_code) . '"/>';
    }
}