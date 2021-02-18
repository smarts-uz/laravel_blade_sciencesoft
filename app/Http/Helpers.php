<?php

use App\Translation;

if (! function_exists('_trans')) {
    function _trans($key, $lang = null){
        // if($lang == null){
        //     $lang = App::getLocale();
        // }

        $translation_def = Translation::where('lang', env('DEFAULT_LANGUAGE', 'en'))->where('lang_key', $key)->first();
        if($translation_def == null){
            $translation_def = new Translation;
            $translation_def->lang = env('DEFAULT_LANGUAGE', 'en');
            $translation_def->lang_key = $key;
            $translation_def->lang_value = $key;
            $translation_def->save();
        }

        //Check for session lang
        $translation_locale = Translation::where('lang_key', $key)->where('lang', $lang)->first();
        if($translation_locale != null && $translation_locale->lang_value != null){
            return  htmlspecialchars($translation_locale->lang_value);
        }
        elseif($translation_def->lang_value != null){
            return htmlspecialchars($translation_def->lang_value);
        }
        else{
            return htmlspecialchars($key);
        }
    }
}

//highlights the selected navigation on frontend
if (! function_exists('default_language')) {
    function default_language()
    {
        return env("DEFAULT_LANGUAGE","en");
    }
}


function remove_invalid_charcaters($str)
{
    $str = str_ireplace(array("\\"), '', $str);
    return str_ireplace(array('"'), '\"', $str);
}


if (!function_exists('app_timezone')) {
    function app_timezone()
    {
        return config('app.timezone');
    }
}



if (!function_exists('isHttps')) {
    function isHttps()
    {
        return !empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS']);
    }
}

if (!function_exists('getBaseURL')) {
    function getBaseURL()
    {
        $root = (isHttps() ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

        return $root;
    }
}


?>
