<div class="bg_wrapper"><div></div></div>
<div class="content_wrapper">
    <div id="header" class="w_600 clear">
        <?php if ($logo): ?>
        <img src="<?php print $logo; ?>" class="fr" alt="<?php print $site_name; ?>" title="<?php print $site_name; ?>" />
        <?php endif; ?>
    </div>
    <?php if ($main_menu || $secondary_menu): ?>
    <div id="navigation" class="w_600 clear">
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
    </div>
    <?php endif; ?>
    <?php if ($page['header']): ?>
        <?php print render($page['header']); ?>
    <?php endif; ?>
    <div id="content" class="w_600 clear">
      <?php if ($messages): ?>
        <?php print $messages; ?>
      <?php endif; ?>
      <?php if ($page['sidebar_second'] || isset($sidebar)): ?>
        <div class="sidebar">
            <?php print render($page['sidebar_second']); ?>
            <?php print $sidebar; ?>
        </div>
      <?php endif; ?>
        <?php if($page['help']): ?>
            <div class="help"><?php print render($page['help']); ?></div>
        <?php endif; ?>
        <?php print render($page['content']); ?> 
    </div>
    <div id="footer" class="w_600 clear">
        <?php print render($page['footer']); ?>
    </div>
</div>

