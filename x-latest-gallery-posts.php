<?
widget_css();
	
$_bo_table = $widget_config['forum1'];
$_no_of_posts = $widget_config['default_no_of_posts'];
if ( empty($_bo_table) ) $_bo_table = $widget_config['default_forum_id'];
if ( empty($_no_of_posts) ) $_no_of_posts = $widget_config['no_of_posts'];

$list = g::posts( array(
			"bo_table" 	=>	$_bo_table,
			"limit"		=>	$_no_of_posts,
			"select"	=>	"idx,domain,bo_table,wr_id,wr_parent,wr_is_comment,wr_comment,ca_name,wr_datetime,wr_hit,wr_good,wr_nogood,wr_name,mb_id,wr_subject,wr_content"
				)
		);	
?>

<div class='latest-gallery-posts'>
	<div class='title'>
		<a href="<?=g::url()?>/bbs/board.php?bo_table=<?=$_bo_table?>"><?=$bo_subject?></a>
	</div>
	<div class='post-items'>
		<?php if ( $list ) {?>
			<? foreach ( $list as $post ) {?>
				<p class='post-item'><img src="<?=x::url()?>/widget/<?=$widget_config[name]?>/img/bullet.png"//><a href="<?=$post['href']?>"><?=cut_str($post['wr_subject'], 20, '...')?></a></p>
			<?}?>
		<?}
			else {?>
				<p class='post-item'><img src="<?=x::url()?>/widget/<?=$widget_config[name]?>/img/bullet.png"//><a href='javascript:void(0);'>현재 회원님께서는</a></p>
				<p class='post-item'><img src="<?=x::url()?>/widget/<?=$widget_config[name]?>/img/bullet.png"//><a href='javascript:void(0);'>필고 갤러리 테마 No.2를</a></p>
				<p class='post-item'><img src="<?=x::url()?>/widget/<?=$widget_config[name]?>/img/bullet.png"//><a href='javascript:void(0);'>사용하고 계십니다.</a></p>
				<p class='post-item'><img src="<?=x::url()?>/widget/<?=$widget_config[name]?>/img/bullet.png"//><a href='<?=url_site_config()?>'>사이트설정 바로가기</a></p>
		<?	}?>
	</div>
</div>