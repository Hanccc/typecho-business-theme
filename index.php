<?php

/**
 * 这是HanSon制作的 公司 的Typecho模板
 *
 * @package Business Theme
 * @author HanSon
 * @version 1.0.0
 * @link http://hanc.cc
 */

$this->need('header.php');
?>
<section class="billboard">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="intro animate fadeIn">
					<h1><?php $this->options->slogan() ?></h1>
					<p class="lead"></p>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="demo1">
			    <!-- <?php while($this->next()): ?> -->
			    <!-- <div class="panel panel-default">
				    <div class="panel-body">
				        <h3 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
				        <div class="post-meta">
				        	<span>作者：<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> | </span>
				        	<span>时间：<?php $this->date('F j, Y'); ?> | </span>
				        	<span>分类：<?php $this->category(','); ?> | </span>
				        	<span>评论：<a href="<?php $this->permalink() ?>"><?php $this->commentsNum('%d 评论'); ?></a> </span>
				        </div>
				        <div class="post-content"><?php $this->content('Continue Reading...'); ?></div>
				    </div>
			    </div>
			    <?php endwhile; ?> -->
			    <!-- <?php $this->pageNav('<< 上一页', '下一页 >>'); ?> -->
			    <div class="wrapper">
			    	<div class="d1">
			    	    <h2>广告主</h2>
			    	    <p>多维度精准投放、定制投放计划，推广<br>更具价值。</p>
			    	    <a class="btn btn-inverse btn-raised" href="/advertiser">了解更多</a>
			    	</div>
			    	<div class="d2">
			    	    <h2>广告主</h2>
			    	    <p>多维度精准投放、定制投放计划，推广<br>更具价值。</p>
			    	    <a class="btn btn-inverse btn-raised" href="/advertiser">了解更多</a>
			    	</div>
			    	<div class="d3">
			    	    <h2>广告主</h2>
			    	    <p>多维度精准投放、定制投放计划，推广<br>更具价值。</p>
			    	    <a class="btn btn-inverse btn-raised" href="/advertiser">了解更多</a>
			    	</div>
			    	<div class="d4">
			    	    <h2>广告主</h2>
			    	    <p>多维度精准投放、定制投放计划，推广<br>更具价值。</p>
			    	    <a class="btn btn-inverse btn-raised" href="/advertiser">了解更多</a>
			    	</div>
			    </div>
			</div>
			<div class="demo_h4">
			    <div class="wrapper"></div>
			</div>
			<div class="demo2">
				<div class="col-md-6 col-md-offset-3">
					<div class="wrapper">
						<div class="title">
							<div>
								<h2>动态</h2>
								<span>&nbsp;&nbsp;News</span>
							</div>
							<a href="/news">更多▶</a>
						</div>
						<div class="new_list">
							<p class="clearf"><a href="">标题</a><span>2015-07-09</span></p>
							<?php while($this->next()): ?>
								<p class="clearf">
									<a href="<?php $this->author->permalink(); ?>"><?php $this->title() ?></a>
									<span><?php $this->date('F j, Y'); ?></span>
								</p>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- <?php $this->need('sidebar.php'); ?> -->
	<?php $this->need('footer.php'); ?>