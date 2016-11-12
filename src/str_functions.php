<?php

if (!function_exists('str_slugify')) {
    /**
     * Turn a string into a slug
     * @param  string   $text
     * @return string
     */
    function strSlugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

        // trim dashes
        $text = trim($text, '-');

        // remote accent characters
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // lowercase
        $text = strtolower($text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        if (empty($text)) {
            return '';
        }

        return $text;
    }
}
