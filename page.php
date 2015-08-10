<?php

    if (isset($_GET["action"]) && $_GET["action"] == "ajax_comments") {
        // $this->need('comments.php');
    } else {
        if(strpos($_SERVER["PHP_SELF"],"themes")) header('Location:/');
        $this->need('header.php');
?>
    <?php if ($this->is('page')): ?>
    <section class="pagepng" id="">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="intro animate fadeIn">
                        <p class="lead"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
<div class="container" id="main">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="post-content">
                        <?php print_r($this->options)?>
                        <?php $this->content('Continue Reading...'); ?></div>
                </div>
            </div>
        </div>

    <?php $this->need('footer.php'); ?>
<?php } ?>
