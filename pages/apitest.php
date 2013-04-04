<?php
echo 'api test <br />';
$data = $guild->getMembers();
//echo "<pre>";
$count = count($data);
for($a = 0; $a < $count; $a++)
{
    echo "<img src='".$data[$a]['character']['thumbnailURL']."'></img>";
    $b = $a + 1;
    if($b % 20 == 0)
    {
        echo "<br />";
    }
}
//echo "</pre>";

?>

