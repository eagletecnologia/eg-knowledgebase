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
    public function anchorsFunction($content, $tag = 'h2', $terms)
    {

        $configTags = array_map('trim', explode(',',$this->config));

        if (in_array($tag, $configTags)){
            $textMenu = [];
            $rx = '/<'.$tag.'>(.*)<\/'.$tag.'>/';

            preg_match_all($rx, $content, $group);

            if (!empty($group[1])){

                if (!empty($terms)){
                    $termsArray = array_map('trim', explode(',',$terms));
                    $elements = array_diff($group[1],$termsArray);
                }else{
                    $elements = $group[1];
                }

                foreach($elements as $element){
                    $textMenu[] = $element;
                }
                $html = $this->getHtmlTag($textMenu);
            }else{
                $html = '';
            }
        }else{
            $tag = current($configTags);
            $html = $this->anchorsFunction($tag, $content);
        }

        return $html;

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