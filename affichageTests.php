<?php

include "item.php";

$item = new Item("nom", "description", 5, "image_Url", 15, 3, true);

$name_item = $item -> getNom();
echo($name_item);





?>