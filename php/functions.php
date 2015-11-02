<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
 <head>
 </head>
 <body>
<?php
function startsWith($haystack, $needle) {
    // search backwards starting from haystack length characters from the end
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
}
function endsWith($haystack, $needle) {
    // search forward starting from end minus needle length characters
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
}
function olLiTree( $tree ) {
    echo '<ul>';
    foreach ( $tree as $item ) {
        echo "<li id=\"$item[id]\" parent_id=\"$item[parent_id]\" > $item[name] </li>";
        if ( isset( $item['children'] ) ) {
            olLiTree( $item['children'] );
        }
    }
    echo '</ul>';
}
?>
 </body>
</html>