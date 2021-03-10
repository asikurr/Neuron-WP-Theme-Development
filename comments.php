<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( post_password_required() ) {
    return;
}

$comment_count = get_comments_number();
?>

<div id="comments" class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

	<?php
if ( have_comments() ):
    ;
    ?>
					<h2 class="comments-title single-post-title">
						<?php if ( '1' === $comment_count ): ?>
							<?php esc_html_e( '1 comment', 'neuron-online' );?>
						<?php else: ?>
				<?php
printf(
    /* translators: %s: comment count number. */
    esc_html( _nx( 'comment (%s)', ' comments (%s)', $comment_count, 'Comments title', 'neuron-online' ) ),
    esc_html( number_format_i18n( $comment_count ) )
);
?>
			<?php endif;?>
	</h2><!-- .comments-title -->

		<ol class="comment-list">
			<?php
                wp_list_comments(
                    array(
                        'avatar_size' => 60,
                        'style'       => 'ol',
                        'short_ping'  => true,
                        'replay_text' => __( 'Replay', 'neuron-online' ),
                    )
                );
                ?>
		</ol><!-- .comment-list -->

		<?php
// the_comments_pagination(
//     array(
//        'before_page_number' => esc_html__( 'Page', 'neuron-online' ) . ' ',
//       'mid_size'           => 0,
//      'prev_text'          => sprintf(
//            '%s <span class="nav-prev-text">%s</span>'
//        ),
//        'next_text'          => sprintf(
//            '<span class="nav-next-text">%s</span> %s'
//        ),
//    )
//);
?> 

		<?php if ( !comments_open() ): ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'neuron-online' );?></p>
		<?php endif;?>
	<?php endif;?>

	<?php
comment_form(
    array(
        'logged_in_as'       => null,
        'title_reply'        => esc_html__( 'Leave a comment', 'neuron-online' ),
        'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
        'title_reply_after'  => '</h2>',
    )
);
?>

</div><!-- #comments -->
