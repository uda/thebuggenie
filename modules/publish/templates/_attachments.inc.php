<div class="no_items" id="article_<?php echo mb_strtolower($article->getId()); ?>_no_files"<?php if (count($article->getFiles()) > 0): ?> style="display: none;"<?php endif; ?>><?php echo __('There are no file attached to this article'); ?></div>
<ul class="attached_items" id="article_<?php echo $article->getID(); ?>_files">
	<?php foreach ($attachments as $file_id => $file): ?>
		<?php include_component('main/attachedfile', array('base_id' => 'article_'.mb_strtolower($article->getId()).'_files', 'mode' => 'article', 'article' => $article, 'file' => $file)); ?>
	<?php endforeach; ?>
</ul>
