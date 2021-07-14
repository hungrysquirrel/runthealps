<?php
/**
 * Customs RSS template
 * Kudos: https://gregrickaby.com/custom-rss-template-wordpress/
 * @package Unique
 */
/**
 * Feed defaults.
 */
header( 'Content-Type: ' . feed_content_type( 'rss-http' ) . '; charset=' . get_option( 'blog_charset' ), true );
$frequency  = 1;        // Default '1'. The frequency of RSS updates within the update period.
$duration   = 'hourly'; // Default 'hourly'. Accepts 'hourly', 'daily', 'weekly', 'monthly', 'yearly'.
/**
 * Start RSS feed.
 */
echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
	<?php do_action( 'rss2_ns' ); ?>
>

  <!-- RSS feed defaults -->
	<channel>
		<title><?php bloginfo_rss( 'name' ); ?></title>
		<link><?php bloginfo_rss( 'url' ) ?></link>
		<description><?php bloginfo_rss( 'description' ) ?></description>
		<lastBuildDate><?php echo mysql2date( 'D, d M Y H:i:s +0000', get_lastpostmodified( 'GMT' ), false ); ?></lastBuildDate>
		<language><?php bloginfo_rss( 'language' ); ?></language>
		<sy:updatePeriod><?php echo apply_filters( 'rss_update_period', $duration ); ?></sy:updatePeriod>
		<sy:updateFrequency><?php echo apply_filters( 'rss_update_frequency', $frequency ); ?></sy:updateFrequency>
		<atom:link href="<?php self_link(); ?>" rel="self" type="application/rss+xml" />


		<?php do_action( 'rss2_head' ); ?>
		
		<!-- Start loop -->
		<?php while( have_posts()) : the_post();
		
		$email = get_the_author_meta( 'email');
    $author = get_the_author();
        
    $postimages = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'embed-image' );
    // Check for images
    if ( $postimages ) {
	    // Get featured image
	    $postimage = $postimages[0];
    }
    
		?>

			<item>
				<title><?php the_title_rss(); ?></title>
				<link><?php the_permalink_rss(); ?></link>
				<guid isPermaLink="false"><?php the_guid(); ?></guid>
				<author><?php echo $email ?><?php echo ' ('.$author.')' ?></author>
				<pubDate><?php echo mysql2date( 'D, d M Y H:i:s +0000', get_post_time( 'Y-m-d H:i:s', true ), false ); ?></pubDate>
				<description><![CDATA[<?php echo '<a href="' . get_permalink() . '"><img src="' . $postimage . '" style="width:100%;margin:10px 0;" alt="" /></a>' ?>
					<?php echo get_the_content();?>]]></description>
			</item>

		<?php endwhile; ?>
	</channel>
</rss>