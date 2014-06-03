<?php

$script_str = htmlspecialchars("<script> alert(); </script>"); // &lt;script&gt; alert(); &lt;/script&gt;
echo $script_str, PHP_EOL;
$html_str = nl2br("<html>\n<title></title>\n</html>"); // nl2br function Replace '\n' to '<br />\n'
echo $html_str, PHP_EOL;





