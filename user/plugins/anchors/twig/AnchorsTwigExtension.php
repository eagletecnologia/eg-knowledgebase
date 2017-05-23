<?php

namespace Grav\Plugin;

class AnchorsTwigExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'AnchorsTwigExtension';
    }
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('anchors', [$this, 'anchorsFunction'])
        ];
    }


    /**
     * Get a list of anchors link
     *
     * @param $content
     * @param $tag
     * @return string
     */
    public function anchorsFunction($content, $tag = 2)
    {
        $textMenu = [];
        $rx = '/<h'.$tag.'>(.*)<\/h'.$tag.'>/';

        preg_match_all($rx, $content, $group);

        foreach($group[1] as $element){
            $textMenu[] = $element;
        }
        return $this->getHtmlTag($textMenu);
    }


    /**
     * Mount the html of anchors link
     *
     * @param $itens
     * @return string
     */
    private function getHtmlTag($itens)
    {
        $html = '';

        $html .= '<ul>';
        foreach($itens as $item){
            $html .= '<li><a href="#'.$this->getUrl($item).'">'.$item.'</a></li>';
        }
        $html .= '</ul>';

        return $html;
    }


    /**
     * Get url whithout special characters
     *
     * @param $text
     * @return string
     */
    private function getUrl($text)
    {
        $what = array('ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º' );
        $urlAnchor = strtolower(str_replace(' ', '-', str_replace($what, '', $text)));

        return $urlAnchor;
    }
}