<?php
/** 
    This file holds commonly used functions * Remember, keep the code DRY! 
**/

function escape($html) { return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8"); }

?>
