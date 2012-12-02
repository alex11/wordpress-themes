<?php

/**
 * BuddyPress - Groups Loop
 *
 * Querystring is set via AJAX in _inc/ajax.php - bp_dtheme_object_filter()
 *
 * @package BuddyPress
 * @subpackage bp-default
 */

?>

<?php do_action( 'bp_before_groups_loop' ); ?>

<?php if ( bp_has_groups( bp_ajax_querystring( 'groups' ) ) ) : ?>

	<div id="pag-top" class="pagination">

		<div class="pag-count" id="group-dir-count-top">

			<?php bp_groups_pagination_count(); ?>

		</div>

		<div class="pagination-links" id="group-dir-pag-top">

			<?php bp_groups_pagination_links(); ?>

		</div>

	</div>

	<?php do_action( 'bp_before_directory_groups_list' ); ?>

	<ul id="groups-list" class="item-list" role="main">

	<?php while ( bp_groups() ) : bp_the_group(); ?>
		<span class="group-box">
		<li>
			
				<span class="group-box-image-container">
					<div class="item-avatar">
						<a class="group-box-image" href="<?php bp_group_permalink(); ?>">
							<?php bp_group_avatar(); ?>
							<span class="group-box-members"><?php bp_group_member_count(); ?></span>
							<span class="group-box-item-meta"><?php printf( __( 'active %s', 'buddypress' ), bp_get_group_last_active() ); ?></span>
						</a>
					</div>
				</span>
				<div class="clear"></div>
				<span class="group-box-title">
					<a href="<?php bp_group_permalink(); ?>"><?php bp_group_name(); ?></a>
				</span>
				<span class="group-box-item-desc display-none">
					<span class="activity"><?php printf( __( 'active %s', 'buddypress' ), bp_get_group_last_active() ); ?></span>
				</span>

			<div class="item">

				<div class="item-desc"><?php bp_group_description_excerpt(); ?></div>

				<?php do_action( 'bp_directory_groups_item' ); ?>

			</div>

			<div class="clear"></div>
		</li>
			</span>
	<?php endwhile; ?>
		<div class="clear"></div>

	</ul>

	<?php do_action( 'bp_after_directory_groups_list' ); ?>

	<div id="pag-bottom" class="pagination">

		<div class="pag-count" id="group-dir-count-bottom">

			<?php bp_groups_pagination_count(); ?>

		</div>

		<div class="pagination-links" id="group-dir-pag-bottom">

			<?php bp_groups_pagination_links(); ?>

		</div>

	</div>

<?php else: ?>

	<div id="message" class="info">
		<p><?php _e( 'There were no groups found.', 'buddypress' ); ?></p>
	</div>

<?php endif; ?>

<?php do_action( 'bp_after_groups_loop' ); ?>
