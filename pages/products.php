<?php
global $pageData;
$pageData['products']=$products;
//$products=[];
?>
<h1> Page Products </h1>

<h2>Mes Produits</h2>
<ul>
    <?php 
        foreach ($products as $key => $value) {
            # code...
            ?>
    <li>Toto</li>
    <?php

        }
        ?>
</ul>
<?php