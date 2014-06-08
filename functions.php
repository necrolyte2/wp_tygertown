<?php
require_once 'google-api-php-client/src/apiClient.php';
require_once 'google-api-php-client/src/contrib/apiPlusService.php';

/* Callback function to generate a comment */
function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">

      <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>

      <div class="comment-author vcard">
         <?php echo get_avatar($comment,$size='48'); ?>

         <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
      </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
      <?php endif; ?>


      <?php comment_text() ?>

      <div class="reply">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
     </div>
<?php
        }

if ( function_exists('register_sidebar') )
    register_sidebar();

function gPlusProfile( ) {
	$client = new apiClient();
	$client->setDeveloperKey('AIzaSyAXRmcQIvqYQpd_jDtJBGKlsUg3qRdXgS4');
	$client->setAuthClass('apiAuthNone');
	$plus = new apiPlusService($client);
	$client->authenticate();

	return $plus->people->get( '103203488152334135508' );
}

function gPlusPic( $size = 200 ) {
	$profile = gPlusProfile();
	$url = $profile['image']['url'];
    return str_replace( "sz=50", "sz=$size", $url );
}
?>
