<?php

/**
 * @file
 * Theme implementation to display a node.
 *
 * Removed all the extra divs.
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="content"<?php print $content_attributes; ?>>
    <?php
      print render($content);
    ?>
  </div>
</div>
