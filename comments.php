<style>
    .comment-meta {
        background-color: inherit;
    }
    
    .comment {}
    
    #comments img.avatar {
        border-radius: 50%;
        margin: 10px;
        margin-left: 0px;
    }
    
    #comments ul,
    li {
        list-style: none;
    }
    
    #comments ul {
        padding-left: 0px;
    }
    
    #comments li {
        padding: 20px;
        border-bottom: 2px solid #ccc;
    }
    
    #comments b.fn {
        position: absolute;
        top: 10px;
        color: #1a1a1a;
    }
    
    #comments span.says {
        display: none;
        color: #1a1a1a;
    }
    
    #comments div.comment-metadata {
        font-size: 12px;
        margin-left: 53px;
        margin-top: -35px;
        color: #1a1a1a;
    }
    
    #comments .comment-awaiting-moderation {
        font-size: 12px;
        color: red;
        left: 0px;
        padding: 0px;
    }
    
    a.comment-reply-link {
        font-size: 14px;
        cursor: pointer;
        background-color: inherit;
        color: #666666;
        padding: 8px 15px;
        border: 1px solid #666666;
        border-radius: 5px;
        transition: all 0.3s;
    }
    
    div.reply {
        margin: 20px auto;
        margin-top: 30px;
    }
    
    a.comment-reply-link:hover {
        background-color: #ff8000;
        color: white;
        border-color: #ff8000;
    }
    /*comment form block*/
    
    .comment-respond {
        margin-top: 30px;
        margin-bottom: 30px;
    }
    
    .comment-respond input,
    textarea {
        width: 100%;
        display: block;
        padding: 10px;
        margin-top: 20px;
        background-color: #e2e2e2;
        border-radius: 4px;
        color: black;
        transition: all 0.2s;
        border: 0px;
    }
    
    .comment-respond input:focus,
    textarea:focus {
        -webkit-box-shadow: 0px 0px 13px 3px rgba(47, 173, 255, 1);
        -moz-box-shadow: 0px 0px 13px 3px rgba(47, 173, 255, 1);
        box-shadow: 0px 0px 13px 3px rgba(47, 173, 255, 1);
        background-color: #f6f6f6;
    }
    
    .comment-respond input#submit {
        width: auto;
        cursor: pointer;
        background-color: inherit;
        color: #666666;
        padding: 8px 15px;
        border: 1px solid #666666;
        border-radius: 5px;
        transition: all 0.3s;
    }
    
    .comment-respond input#submit:hover {
        background-color: #ff8000;
        color: white;
        border-color: #ff8000;
    }
    
    p.comment-notes {
        font-size: 14px;
    }
</style>
<?php

if ( post_password_required() ) {
	return;
}
?>
    <div id="comments" class="comments-area col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
        <?php if ( have_comments() ) : ?>
            <h2 class="comments-title">
			Comments
		</h2>
            <?php the_comments_navigation(); ?>
                <ul class="comment-list">
                    <?php
				wp_list_comments( array(
					'style'       => 'li',
					'short_ping'  => true,
					'avatar_size' => 42,
				) );
                
			?>
                </ul>
                <!-- .comment-list -->
                <?php the_comments_navigation(); ?>
                    <?php endif; // Check for have_comments(). ?>
                        <?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
                            <p class="no-comments">
                                <?php _e( 'Comments are closed.', 'twentysixteen' ); ?>
                            </p>
                            <?php endif; ?>
                                <?php
		comment_form( array(
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
		) );
	?> </div>
    <!-- .comments-area -->