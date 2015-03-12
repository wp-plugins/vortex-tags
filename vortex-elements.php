<?php
function vortex_elements()
{
	?>
    <script type="text/javascript">
     jQuery(document).ready(function (){
	 jQuery("#vortex").vortex({
	 initialPosition: 200,
	 speed: <?php echo get_option('vortex_speed'); ?>,
	 deepFactor: .1
	 });
	 }); 
     </script>
     <style type="text/css">
	 #vortex{width:150px;height: 150px;position: relative;}
	 #vortex .square-button{ border-radius:30px; width:50px; height:50px; text-align:justify; vertical-align:middle; position:relative;}
	 #vortex .square-button span{ top:20%; left:20%;position:absolute; font-size:50%;text-decoration:none;}
	 #vortex .square-button a{ color:<?php echo get_option('vortex_font_color'); ?>; text-decoration:none;}
     #vortex.vortex-animating > *{background-color: <?php echo get_option('vortex_bg'); ?>; color:<?php echo get_option('vortex_font_color'); ?>;}
	 </style>
    <?php 
	$html = '<div id="vortex">';
	if(count(get_tags())>0){
		foreach(get_tags() as $tags)
		{
			$tag_link = get_tag_link( $tag->term_id );	
			$html .= '<div class="square-button"><a href="'.$tag_link.'"><span>'.$tags->slug.'</span></a></div>';
		}
	}
	else
	{
		$html .= '<div class="square-button"><a><span>Welcome</span></a></div>';
		$html .= '<div class="square-button"><a><span>Hello</span></a></div>';
		$html .= '<div class="square-button"><a><span>Hi</span></a></div>';
		$html .= '<div class="square-button"><a><span>Test</span></a></div>';
	}
	$htm  .= '</div>';
 	echo $html;
	
}