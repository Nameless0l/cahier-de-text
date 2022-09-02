<?php
ignore_user_abort(true);
if(!defined('WEBSITE_NAME'))define('WEBSITE_NAME', 'Dev Forward');

if (!defined('translate')){
    function translate($month){
        if ($month=='January')return 'Janvier';
        if ($month=='Febuary')return 'Février';
        if ($month=='March')return 'Mars';
        if ($month=='April')return 'Avril';
        if ($month=='May')return 'Mai';
        if ($month=='June')return 'Juin';
        if ($month=='July')return 'Juillet';
        if ($month=='August')return 'Août';
        if ($month=='September')return 'Septembre';
        if ($month=='October')return 'Octobre';
        if ($month=='November')return 'Novembre';
        if ($month=='December')return 'Decembre';

    }
}
