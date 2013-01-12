        <div class="stripe"></div>
        <div class="header">

        <p id="site-title"><object data="<?= $inclpath ?>/images/sourcecode.svg" type="image/svg+xml" id="svg" class="logo"></object>Niels van Aken<span class="sub">Webdeveloper</span></p>
        </div>
        <div class="main">
            <div class="sidebar first">
                <?php if ($page['navigation']): ?>
                    <?php print render($page['navigation']); ?>
                <?php endif; ?>
                <?php if ($page['aside_first']): ?>
                <?php print render($page['aside_first']) ?>
                <?php endif; ?>
                <div class="quote">
                    <strong>As social as a nerd can be...</strong>
                    <a href="http://www.twitter.com/vanakenpublic/" target="_blank" class="social twitter" alt="Follow me on Twitter" title="Follow me on Twitter">vanakenpublic</a>
                    <a href="https://github.com/nvaken" target="_blank" class="social github" alt="Visit me on github" title="Visit me on github">nvaken</a>

                    <link href="http://coderwall.com/stylesheets/jquery.coderwall.css" media="all" rel="stylesheet" type="text/css">
                    <script src="http://coderwall.com/javascripts/jquery.coderwall.js"></script>
                    <section class="coderwall" data-coderwall-username="nvaken" data-coderwall-orientation="vertical"></section>
                </div>
            </div>
            <div class="content">
                <?php if (isset($primary_local_tasks)): ?><ul class='links'><?php print render($primary_local_tasks) ?></ul><?php endif; ?>
                <?php if (isset($secondary_local_tasks)): ?><ul class='links'><?php print render($secondary_local_tasks) ?></ul><?php endif; ?>
                <?php if (isset($action_links)): ?><ul class='links'><?php print render($action_links); ?></ul><?php endif; ?>

                <?php if ($page['help'] || ($show_messages && $messages)): ?>
                    <?php print render($page['help']); ?>
                    <?php if ($show_messages && $messages): print $messages; endif; ?>
                <?php endif; ?>

                <?php print render($title_prefix); ?>
                <?php if ($title): ?><h1><?php print $title ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>

                <?php print render($page['content']) ?>

            </div>
            <div class="clr"></div>
        </div>
        <div class="footer">
            <div class="content">
                <?php print render($page['footer']) ?>
                <p class="copy">&copy;<?php print date('Y'); ?></p>
            </div>
        </div>

