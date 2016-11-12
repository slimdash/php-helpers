<?php
if (!function_exists('env')) {
    /**
     * Gets the value of an environment variable or return default if not found.
     *
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    function env($key, $default = null)
    {
        $value = getenv($key);
        if (!isset($value)) {
            return $default;
        }

        $value = trim($value);

        if (empty($value)) {
            return $default;
        }

        switch (strtolower($value)) {
            case 'true':
            case '(true)':
                return true;
            case 'false':
            case '(false)':
                return false;
            case 'empty':
            case '(empty)':
                return '';
            case 'null':
            case '(null)':
                return;
        }
        $len = strlen($value);

        if ($len > 1) {
            $newVal = trim($value, '"');
            if (($len - 2) == strlen($newVal)) {
                $value = $newVal;
            }
        }
        return $value;
    }
}
