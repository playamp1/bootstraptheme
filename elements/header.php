<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header_top.php');
$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();

?>

<header>
    <div class="container">
                <?php
                $a = new GlobalArea('Header Site Title');
                $a->display();
                ?>
    </div>
</header>