<?php
/* Generated from ./assert_templates/base.tpl */
function haanga_d2f931b3242b3187b9a3d407f38c7d9d691df84f($vars, $return=FALSE, $blocks=array())
{
    extract($vars);
    $buffer1  = "<html>\n<head>\n    <title>";
    $buffer2  = "";
    $buffer2 .= "Default Title";
    $buffer1 .= (isset($blocks["title"]) == TRUE ? (strpos($blocks["title"], "{{block.1b3231655cebb7a1f783eddf27d254ca}}") === FALSE ? $blocks["title"] : str_replace("{{block.1b3231655cebb7a1f783eddf27d254ca}}", $buffer2, $blocks["title"])) : $buffer2)."</title>\n</head>\n\n<body>\n    <h1>Menu</h1>\n    ";
    $buffer2  = "";
    $buffer2 .= "\n    <ul>\n        ";
    foreach ($menu as  $item) {
        $buffer2 .= "\n            <li><a href=\"".$item["url"]."\">".htmlentities($item["name"])."</a></li>\n        ";
    }
    $buffer2 .= "\n    </ul>\n    ";
    $buffer1 .= (isset($blocks["menu"]) == TRUE ? (strpos($blocks["menu"], "{{block.1b3231655cebb7a1f783eddf27d254ca}}") === FALSE ? $blocks["menu"] : str_replace("{{block.1b3231655cebb7a1f783eddf27d254ca}}", $buffer2, $blocks["menu"])) : $buffer2)."\n    ".Haanga::Load("assert_templates/partial.tpl", $vars, TRUE, $blocks)."\n</body>\n</html>\n";
    if ($return == TRUE) {
        return $buffer1;
    } else {
        echo $buffer1;
    }
}