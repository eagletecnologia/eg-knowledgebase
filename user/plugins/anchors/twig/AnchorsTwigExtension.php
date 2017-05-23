<?php

namespace Grav\Plugin;

class AnchorsTwigExtension extends \Twig_Extension
{

    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

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
    public function anchorsFunction($content, $tag = 'h2')
    {

        $configTags = explode(',',$this->config);

        if (in_array($tag, $configTags)){
            return $this->getHtml($tag, $content);
        }else{
            $tag = current($configTags);
            return $this->getHtml($tag, $content);
        }

    }


    /**
     * It to do processo of regex find the tag
     *
     * @param $tag
     * @param $content
     * @return string
     */
    private function getHtml($tag, $content)
    {
        $textMenu = [];
        $rx = '/<'.$tag.'>(.*)<\/'.$tag.'>/';

        preg_match_all($rx, $content, $group);

        if (!empty($group[1])){
            foreach($group[1] as $element){
                $textMenu[] = $element;
            }
            return $this->getHtmlTag($textMenu);
        }else{
            return '';
        }
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

        $html .= '<ul class="items-menus-page">';
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