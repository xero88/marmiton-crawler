<?php
    namespace sylouuu\MarmitonCrawler\Recipe\Parser;

    use PHPHtmlParser\Dom;

    /**
     * CookTime Parser
     *
     * @author sylouuu
     * @link https://github.com/sylouuu/marmiton-crawler
     * @version 0.1.0
     * @license MIT
     */
    class IsVegetarian
    {
        /**
         * Extract from DOM object
         *
         * @param object $dom
         * @return int
         */
        public static function parse ($dom)
        {
            $element = $dom->find('.m_content_recette_breadcrumb');

            if ($element->text !== null) {

                $content = $element->text;
                if (strpos($content, 'Végétarien') !== false)
                    return 1;
                else
                    return 0;

            } else {
                return null;
            }
        }
    }
