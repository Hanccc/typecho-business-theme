<?php $this->need('header.php'); ?>
<section class="billboard" id="dy">
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
<div class="container" id="main">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php if ($this->have()): ?>
                <?php while($this->next()): ?>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
                        <div class="post-meta">
                            <span>来源于：<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> | </span>
                            <span>发表于：<?php $this->date('F j, Y'); ?> | </span>
                            <span>标签：<?php $this->tags(' , ', true, ''); ?>  </span>
                        </div>
                        <div class="post-content"><?php $this->content('点击阅读全文'); ?></div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else: ?>
                    <article class="block">
                        <h2 class="header"><?php _e('没有找到内容'); ?></h2>
                    </article>
                <?php endif; ?>

            <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

        </div>
        <?php $this->need('footer.php'); ?>
