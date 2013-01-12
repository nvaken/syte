<?php
/**
 * Pretty clean base node.tpl.php - We do need a few things like:
 * - Title_pre-/suffix | These are needed for the contextual links
 * - <div> | with #$node->nid and .$classes, some modules use these to select nodes
 * - <div .content> | Always comes in handy I think?
 */
?>
    <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
      <?php print render($title_prefix); ?>
      <?php if (!$page): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <div class="content"<?php print $content_attributes; ?>>
        <?php
          // We hide the comments and links now so that we can render them later.
          hide($content['comments']);
          hide($content['links']);
          print render($content);
        ?>
      </div>
      <div class="comments">
        <?php print render ($content['comments']); ?>
      </div>

      <?php print render($content['links']); ?>

    </div>
