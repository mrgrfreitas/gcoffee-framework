<?php


/*
* gDebug is a function to...
*/
function gExport_dump($array)
{
    echo "<pre>";
    $bugger = highlight_string("<?php\n {\n  \$array debuging...\n". var_export($array, true)."\n }\n?>");
    return var_dump($bugger);
    echo "</pre>";
}

function gPrintr_dump($array)
{
    echo "<pre>";
    $bugger = highlight_string("<?php\n {\n  \$array debuging...\n". print_r($array, true)."\n }\n?>");
    return var_dump($bugger);
    echo "</pre>";
}

function dump($data){
    return die(gExport_dump($data));
}

/**
 * DUMP AND DIE
 * @param $data
 * @return void
 */
function dd($data){
    return die(\Machine\Iginition\Flame::debug($data));
}