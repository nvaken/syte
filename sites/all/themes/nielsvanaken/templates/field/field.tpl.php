<?php
/**
 * Clean HTML-less base field.tpl.php
 */
?>
	<?php if (!$label_hidden): ?>
		<?php print $label ?>:&nbsp;
  <?php endif; ?>
    <?php foreach ($items as $delta => $item): ?>
      <?php print render($item); ?>
    <?php endforeach; ?>
