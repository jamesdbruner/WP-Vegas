<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
	global $post;
	$id = get_the_ID();
    wp_register_script('vegas-shortcode-generator', plugins_url('../../js/shortcodegenerator.js',__FILE__), array('jquery'), null, 1 );
    wp_enqueue_script('vegas-shortcode-generator');
        $genShortcode = get_post_meta( $id, 'genShortcode', true );

	if ( !isset( $genShortcode ) || empty( $genShortcode ) ){
		$ml_txt = __('Generate Your Own Shortcode','wpvegas');
		echo '<form><input type="button" class="button" name="vegas_shortcodeg_button" id="vegas_shortcodeg_button" value="'. $ml_txt .'" /><br><br>';
		$ml_txt = __('Example Shortcode:','wpvegas');
		echo '<div id="example_shortcode">'. $ml_txt .' <input type="text" spellcheck="false" onclick="this.focus();this.select()" readonly="readonly" style="width:650px;max-width:100%" value="[vegas id='. $id .' fade=3000 delay=4000 overlay= arrows=yes autoplay=yes poster=yes]"</input></div>'; 
	} 
	else{ 
		$ml_txt = __('Generate a New Shortcode','wpvegas');
		echo '<form><input type="button" class="button" name="vegas_shortcodeg_button" id="vegas_shortcodeg_button" value="'. $ml_txt .'"/><br><br>';
		$ml_txt = __('Your Custom Shortcode:', 'wpvegas' );
		echo "<div id='example_shortcode'>". $ml_txt ." <input type='text' spellcheck='false' onclick='this.focus();this.select()' readonly='readonly' style='width:650px;max-width:100%' value='" . $genShortcode ."'</input></div>";}
?>

<div id="vegas-shortcode-generator">
<h3><?php _e('Shortcode Generator', 'wpvegas'); ?></h3><br>
<?php _e('Shortcode ID', 'wpvegas'); ?>: <input type="text" id="id" spellcheck="false" readonly="readonly" value="<?php echo $id ?>">
<?php _e('Fade', 'wpvegas'); ?>: <input type="text" id="fade" spellcheck="false" value="">
<?php _e('Delay', 'wpvegas'); ?>: <input type="text" id="delay" spellcheck="false" value="">
<?php _e('Overlay', 'wpvegas'); ?>: <input type="text" id="overlay" spellcheck="false" value="">
<?php _e('Arrows', 'wpvegas'); ?>: <select id="arrows" name="arrows"><option value="no"><?php _e('No', 'wpvegas'); ?></option><option value="yes"><?php _e('Yes', 'wpvegas'); ?></option></select>
<?php _e('Autoplay', 'wpvegas'); ?>: <select id="autoplay" name="autoplay"><option value="no"><?php _e('No', 'wpvegas'); ?></option><option value="yes"><?php _e('Yes', 'wpvegas'); ?></option></select>
<?php _e('Poster', 'wpvegas'); ?>: <select id="poster" name="poster"><option value="no"><?php _e('No', 'wpvegas'); ?></option><option value="yes"><?php _e('Yes', 'wpvegas'); ?></option></select>
<?php _e('Random', 'wpvegas'); ?>: <select id="random" name="random"><option value="no"><?php _e('No', 'wpvegas'); ?></option><option value="yes"><?php _e('Yes', 'wpvegas'); ?></option></select><br>
<input type="button" class="button" name="vegas_generate_button" id="vegas_generate_button" value="<?php _e('Generate Shortcode!', 'wpvegas'); ?>" />
<input type="button" class="button" name="vegas_help_button" id="vegas_help_button" value="<?php _e('Explain What All of This Means...', 'wpvegas'); ?>" />
<br><br>
<div id="generated-shortcode-container"><?php _e('Generated Shortcode:', 'wpvegas'); ?> <input id="generated-shortcode" type="text" spellcheck="false" onclick="this.focus();this.select()" readonly="readonly" name="genShortcode" value="<?php echo $genShortcode; ?>"></div>
</div>
<div id="vegas-parameter-explaination">
<h3><?php _e('Fade', 'wpvegas'); ?></h3>
<p><?php _e('The amount of time it takes to fade from one images to the next (in miliseconds)', 'wpvegas'); ?></p>
<h3><?php _e('Delay', 'wpvegas'); ?></h3>
<p><?php _e('The amount of time the slideshow will wait before fading to the next image (also in miliseconds)', 'wpvegas'); ?></p>
<h3><?php _e('Overlay', 'wpvegas'); ?></h3>
<p><?php echo sprintf( __( 'You can place an image like a pattern over top of the slideshow using the URL of the pattern.  Take the <a href="%s" target="_BLANK">demo site</a> for example.  It has a subtle overlay over all of the images.  To use an overlay image first upload your image/pattern to your media library and then use the URL for the overlay parameter.  E.g. [vegas id=10 fade=5000 delay = 4000 <strong>overlay=yourdomain.com/yourpattern.png</strong> arrows=no autoplay=no poster=no]', 'wpvegas'), 'http://vegas.jamesdbruner.com') ?></p>
<h3><?php _e('Arrows', 'wpvegas'); ?></h3>
<p><?php _e('Weather or not to display next/previous arrows so users can navigate through the slideshow', 'wpvegas'); ?></p>
<h3><?php _e('Autoplay', 'wpvegas'); ?></h3>
<p><?php _e('Weather or not to automatically start playing through the slideshow when the user first loads the page.', 'wpvegas'); ?></p>
<h3><?php _e('Poster', 'wpvegas'); ?></h3>
<p><?php _e('The slideshow will stop on the last image in the slideshow but autoplay must be enabled for this to work.', 'wpvegas'); ?></p>
<h3><?php _e('Random', 'wpvegas'); ?></h3>
<p><?php _e('The slides in your slideshow will display in a random ordrer if this is set to yes.', 'wpvegas'); ?></p>
<hr>
<p><?php _e('After you\'ve generated your shortcode remember to hit Publish or Update so you can come back and copy/paste the shortcode later if you need to!', 'wpvegas'); ?></p>
<input type="button" class="button" name="vegas_help-back_button" id="vegas_help-back_button" value="<?php _e('Thanks! Now take me back to the shortcode generator!', 'wpvegas'); ?>" />
</div>
</form>