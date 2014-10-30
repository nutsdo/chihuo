<?php
	$presenter = new Illuminate\Pagination\BootstrapPresenter($paginator);

	$trans = $environment->getTranslator();
?>
<?php if ($paginator->getLastPage() > 1): ?>
<div class="span6">
	<div class="dataTables_info" id="sample_1_info">第<?php echo $paginator->getLastPage()?>页 -- 第<?php echo $paginator->getLastPage();?> 页  共<?php echo $paginator->getTotal();?>条</div>
</div>
<div class="span6">
	<div class="dataTables_paginate paging_bootstrap pagination">
		<ul>
		<?php echo $presenter->render(); ?>
		</ul>
	</div>
</div>
<?php endif; ?>