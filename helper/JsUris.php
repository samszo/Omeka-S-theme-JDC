<?php
namespace OmekaTheme\Helper;

use Laminas\View\Helper\AbstractHelper;

/**
 * View helper for rendering uris for JavaScript.
 */
class JsUris extends AbstractHelper
{
    /**
     * Render uri for JavaScript.
     * @param array   $props    les propriétés utiles

     */
    public function __invoke($props)
    {
        $urlAjax = $props['site']->siteUrl()."/page/ajax?json=1";
        $this->getView()->headScript()->appendScript('const urlAjax = "'.$urlAjax.'";');
    }
}
