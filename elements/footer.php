<?php defined('C5_EXECUTE') or die("Access Denied.");

$footerSiteTitle = new GlobalArea('Footer Site Title');
$footerSocial = new GlobalArea('Footer Social');
$footerSiteTitleBlocks = $footerSiteTitle->getTotalBlocksInArea();
$footerSocialBlocks = $footerSocial->getTotalBlocksInArea();
$displayFirstSection = $footerSiteTitleBlocks > 0 || $footerSocialBlocks > 0 || $c->isEditMode();

?>

<footer id="footer-theme">
    <?php if ($displayFirstSection) { ?>
    <section>
    <div class="container">
        <?php
        $a = new GlobalArea('Footer');
        $a->display();
        ?>
    </div>
    </section>
    <?php } ?>
</footer>

<?php $this->inc('elements/footer_bottom.php');?>
