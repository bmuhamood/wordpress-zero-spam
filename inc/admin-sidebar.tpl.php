<?php
/**
 * Admin Sidebar Template
 *
 * Content for the plugin settings page right sidebar.
 *
 * @since 1.5.0
 */

/**
 * Security Note: Blocks direct access to the plugin PHP files.
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
?><div class="zero-spam__widget">
	<a href="<?php echo esc_url( $plugin['PluginURI'] ); ?>" target="_blank"><img src="<?php echo plugins_url( 'build/' . $this->img_dir . '/banner.jpg', ZEROSPAM_PLUGIN ); ?>" width="100%" class="zero-spam__thumbnail"></a>
	<div class="zero-spam__inner">
		<h2><a href="<?php echo esc_url( $plugin['PluginURI'] ); ?>" target="_blank"><?php echo __( $plugin['Name'], 'zerospam' ); ?></a></h2>
		<p class="zero-spam__description"><b><?php echo __( 'Rate', 'zerospam' ); ?>:</b> <a href="https://wordpress.org/support/view/plugin-reviews/zero-spam" target="_blank"><i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i></a> |
		<b>Version:</b> <?php echo $plugin['Version']; ?> | <b><?php echo __( 'Author', 'zerospam' ); ?></b> <?php echo $plugin['Author']; ?></p>
		<p><?php echo $plugin['Description']; ?></p>
		<p><small>If you have suggestions for a new add-on, feel free to email me at <a href="mailto:me@benmarshall.me">me@benmarshall.me</a>. Want regular updates? Follow me on <a href="https://twitter.com/bmarshall0511" target="_blank">Twitter</a> or <a href="http://www.benmarshall.me/" target="_blank">visit my blog</a>.</small></p>
		<p>
			<a href="https://www.gittip.com/bmarshall511/" class="zero-spam__button" target="_blank"><?php echo __( 'Show Support &mdash; Donate!', 'zerospam' ); ?></a>
			<a href="https://wordpress.org/support/view/plugin-reviews/zero-spam" class="zero-spam__button" target="_blank"><?php echo __( 'Spread the Love &mdash; Rate!', 'zerospam' ); ?></a>
		</p>
	</div>
</div>

<div class="zero-spam__widget">
	<div class="zero-spam__inner">
		<h3><?php echo __( 'Are you a WordPress developer?', 'zerospam' ); ?></h3>

		<p><?php echo __( 'Help grow this plugin, integrate into your own or add new features by contributing.', 'zerospam' ); ?></p>
		<p><a href="https://github.com/bmarshall511/wordpress-zero-spam/fork" target="_blank" class="button button-large button-primary"><?php echo __( 'Fork it on GitHub!', 'zerospam' ); ?></a></p>
	</div>
</div>

<div class="zero-spam__widget">
	<div class="zero-spam__inner">
		<h3><?php echo __( 'Contributors'); ?></h3>
		<ul class="zero-spam__photos">
			<?php foreach ( $this->contributors as $user => $ary ) : ?>
			<li>
				<a href="<?php echo $ary['github']; ?>" target="_blank" class="zero-spam__photo"><span class="contributors contributors-<?php echo $ary['img']; ?>"></span></a>
				<h4><a href="<?php echo $ary['github']; ?>" target="_blank"><?php echo $ary['name']; ?></a></h4>
				<p>
					<a href="<?php echo $ary['wordpress']; ?>"><span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-wordpress fa-stack-1x fa-inverse"></i>
					</span></a>

					<?php if ( isset( $ary['url'] ) ): ?><a href="<?php echo $ary['url']; ?>"><span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-link fa-stack-1x fa-inverse"></i>
					</span></a><?php endif; ?>

					<?php if ( isset( $ary['twitter'] ) ): ?><a href="<?php echo $ary['twitter']; ?>"><span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
					</span></a><?php endif; ?>

					<?php if ( isset( $ary['github'] ) ): ?><a href="<?php echo $ary['github']; ?>"><span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-github-alt fa-stack-1x fa-inverse"></i>
					</span></a><?php endif; ?>

					<?php if ( isset( $ary['google+'] ) ): ?><a href="<?php echo $ary['google+']; ?>"><span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
					</span></a><?php endif; ?>

					<?php if ( isset( $ary['email'] ) ): ?><a href="mailto:<?php echo $ary['email']; ?>"><span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
					</span></a><?php endif; ?>
				</p>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
