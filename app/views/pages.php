<?php
	$presenter = new Illuminate\Pagination\BootstrapPresenter($paginator);

	$trans = $environment->getTranslator();
?>
<?php if ($paginator->getLastPage() > 1): ?>
<div id="pages">
	<?php echo $presenter->render(); ?>
</div>
<?php endif; ?>
