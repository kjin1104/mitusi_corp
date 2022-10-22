<?php
class histpl
{
    function show($tpl_file)
    {
        $v = $this;
        include(__DIR__ . "/../template/{$tpl_file}");
    }
}
?>