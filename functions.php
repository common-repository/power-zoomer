<?php
function pwz_get_def_settings()
{
	$pwz_settings = array('bannerWidth' => '700',
			'bannerHeight' => '600',
			'position' => 'top',
			'height_tp' => '110',
			'background_color_tp' => 'FFFFFF',
			'thumb_height_max' => '60',
			'thumb_width_max' => '75',
			'thumb_step_reduction' => '10',
			'thumb_border_size_tp' => '2',
			'thumb_border_color' => '000000',
			'thumb_time_animation' => '0.5',
			'font_color' => 'a9abaa',
			'font_size' => '20',
			'background_color_it' => 'ededed',
			'height_ctrl' => '40',
			'background_color_ctrl' => '000000',
			'background_alpha_ctrl' => '0.5',
			'change_time' => '1',
			'showing_time' => '4',
			'auto_play' => 'no',
			'max_zoom' => '2',
			'color_background' => '000000',
			'color_background_over' => 'FFFFFF',
			'color_icon' => 'FFFFFF',
			'color_icon_over' => '000000',
			'background_color_dsc' => '000000',
			'background_alpha_dsc' => '0.7',
			'font_size_dsc' => '13',
			'font_color_dsc' => 'FFFFFF',
			'showOnStart' => 'on',
			'height_clist' => '385',
			'background_color_clist' => 'c2beb9',
			'cat_scale' => 'yes',
			'title_size' => '15',
			'description_size' => '12',
			'title_color' => 'FFFFFF',
			'description_color' => 'FFFFFF',
			'background_color_itm' => '606060',
			'color_over' => '1f1f1f',
			'width_itm' => '250',
			'height_itm' => '146',
			'pic_scale' => 'yes',
			'thumb_width' => '99',
			'thumb_height' => '98',
			'thumb_border_size' => '10',
			'thumb_border_color_itm' => 'FFFFFF',
			'thumb_scale' => 'no',
			'background_color_scroll' => '77c001',
			'element_color' => 'f5f5f5',
			'element_icon_color' => '000000',
			'background_color_close' => '77c001',
			'icon_color' => 'f5f5f5',
			'background_color_over' => 'f5f5f5',
			'icon_color_over' => '77c001',
			'priceTag' => 'yes',
			'currency_position' => 'BR',
			'textSize' => '20',
			'currency_col1' => 'FFFFFF',
			'currency_col1a' => '0.8',
			'currency_col2' => 'CECECE',
			'currency_col2a' => '0.8',
			'currency_label' => 'FFFFFF',
			'currency_labela' => '0.8',
			'currency_labelb' => 'yes',
			'currency_symbol' => '$',
			'price_color' => 'FF00CC',
			'price_colora' => '0.5',
			'price_label' => 'FFFFFF',
			'price_labela' => '0.8',
			'category_id' => '0',
			'defaultcategory' => '0',
			'xml_fname' => 'data'
			);
	return $pwz_settings;
}
function __get_pwz_xml_settings()
{
	//(($ops['auto_play'] == 'yes') ? 'true' : 'false')
	//PWZ_PLUGIN_URL.'/price_images/'.$ops['pricebtn_img']
	$ops = get_option('pwz_settings', array());
	
	$xml_settings = '		<thumb_panel>
			<position>'.$ops['position'].'</position>
			<height>'.$ops['height_tp'].'</height>
			<background_color>0x'.$ops['background_color_tp'].'</background_color>		
			<thumb_height_max>'.$ops['thumb_height_max'].'</thumb_height_max>
			<thumb_width_max>'.$ops['thumb_width_max'].'</thumb_width_max>
			<thumb_step_reduction>'.$ops['thumb_step_reduction'].'</thumb_step_reduction>
			<thumb_border_size>'.$ops['thumb_border_size_tp'].'</thumb_border_size>
			<thumb_border_color>0x'.$ops['thumb_border_color'].'</thumb_border_color>
			<thumb_time_animation>'.$ops['thumb_time_animation'].'</thumb_time_animation>
		</thumb_panel>
		<info_tip>
			<font_color>0x'.$ops['font_color'].'</font_color>
			<font_size>'.$ops['font_size'].'</font_size>
			<background_color>0x'.$ops['background_color_it'].'</background_color>
		</info_tip>
		<controls>
			<height>'.$ops['height_ctrl'].'</height>
			<background_color>0x'.$ops['background_color_ctrl'].'</background_color>
			<background_alpha>'.$ops['background_alpha_ctrl'].'</background_alpha>
		</controls>
		<picture_viewer>
			<change_time>'.$ops['change_time'].'</change_time>
			
			<showing_time>'.$ops['showing_time'].'</showing_time>
			<auto_play>'.(($ops['auto_play'] == 'no') ? 'false' : 'true').'</auto_play>
			
			<max_zoom>'.$ops['max_zoom'].'</max_zoom>			
			<arrows>
				<color_background>0x'.$ops['color_background'].'</color_background>
				<color_background_over>0x'.$ops['color_background_over'].'</color_background_over>
				<color_icon>0x'.$ops['color_icon'].'</color_icon>
				<color_icon_over>0x'.$ops['color_icon_over'].'</color_icon_over>
			</arrows>
			<description>
				<background_color>0x'.$ops['background_color_dsc'].'</background_color>
				<background_alpha>'.$ops['background_alpha_dsc'].'</background_alpha>
				<font_size>'.$ops['font_size_dsc'].'</font_size>
				<font_color>0x'.$ops['font_color_dsc'].'</font_color>
			</description>
		</picture_viewer>
		
		<category_list>
			<showOnStart>'.($ops['showOnStart']=='on'?'true':'false').'</showOnStart>
			<height>'.$ops['height_clist'].'</height>
			<background_color>0x'.$ops['background_color_clist'].'</background_color>
			<item>
				<title_size>'.$ops['title_size'].'</title_size>
				<description_size>'.$ops['description_size'].'</description_size>
				<title_color>0x'.$ops['title_color'].'</title_color>
				<description_color>0x'.$ops['description_color'].'</description_color>
				<background_color>0x'.$ops['background_color_itm'].'</background_color>
				<color_over>0x'.$ops['color_over'].'</color_over>
				<width>'.$ops['width_itm'].'</width>
				<height>'.$ops['height_itm'].'</height>
				<thumb_width>'.$ops['thumb_width'].'</thumb_width>
				<thumb_height>'.$ops['thumb_height'].'</thumb_height>
				<thumb_border_size>'.$ops['thumb_border_size'].'</thumb_border_size>
				<thumb_border_color>0x'.$ops['thumb_border_color_itm'].'</thumb_border_color>				
			</item>
			<scroll>
				<background_color>0x'.$ops['background_color_scroll'].'</background_color>
				<element_color>0x'.$ops['element_color'].'</element_color>
				<element_icon_color>0x'.$ops['element_icon_color'].'</element_icon_color>
			</scroll>
			<close>
				<background_color>0x'.$ops['background_color_close'].'</background_color>
				<icon_color>0x'.$ops['icon_color'].'</icon_color>
				<background_color_over>0x'.$ops['background_color_over'].'</background_color_over>
				<icon_color_over>0x'.$ops['icon_color_over'].'</icon_color_over>
			</close>
		</category_list>
		
		<priceTag enabled="'.$ops['priceTag'].'">
			<model>'.PWZ_PLUGIN_URL.'/js/star_green.png</model>
			<position>'.$ops['currency_position'].'</position>
			<textSize>'.$ops['textSize'].'</textSize>
			<currency>
				<base>
					<color code="0x'.$ops['currency_col1'].'" alpha="'.$ops['currency_col1a'].'" />
					<color code="0x'.$ops['currency_col2'].'" alpha="'.$ops['currency_col2a'].'" />
				</base>
				<label color="0x'.$ops['currency_label'].'" alpha="'.$ops['currency_labela'].'" bold="'.(($ops['currency_labelb'] == 'no') ? 'false' : 'true').'"/>
				<symbol>'.$ops['currency_symbol'].'</symbol>
			</currency>
			<price>
				<base color="0x'.$ops['price_color'].'" alpha="'.$ops['price_colora'].'" />
				<label color="0x'.$ops['price_label'].'" alpha="'.$ops['price_labela'].'" />
			</price>
		</priceTag>
		
	</settings>
';
	return $xml_settings;
}
function pwz_get_album_dir($album_id)
{
	global $gpwz;
	$album_dir = PWZ_PLUGIN_UPLOADS_DIR . "/{$album_id}_uploadfolder";
	return $album_dir;
}
/**
 * Get album url
 * @param $album_id
 * @return unknown_type
 */
function pwz_get_album_url($album_id)
{
	global $gpwz;
	$album_url = PWZ_PLUGIN_UPLOADS_URL . "/{$album_id}_uploadfolder";
	return $album_url;
}
function pwz_get_table_actions(array $tasks)
{
	?>
	<div class="bulk_actions">
		<form action="" method="post" class="bulk_form">Bulk action
			<select name="task">
				<?php foreach($tasks as $t => $label): ?>
				<option value="<?php print $t; ?>"><?php print $label; ?></option>
				<?php endforeach; ?>
			</select>
			<button class="button-secondary do_bulk_actions" type="submit">Do</button>
		</form>
	</div>
	<?php 
}
function shortcode_display_pwz_gallery($atts)
{
	$vars = shortcode_atts( array(
									'cats' => '',
									'imgs' => '',
								), 
							$atts );
	//extract( $vars );
	
	$ret = display_pwz_gallery($vars);
	return $ret;
}
function display_pwz_gallery($vars)
{
	global $wpdb, $gpwz;
	$ops = get_option('pwz_settings', array());
	//print_r($ops);
	$albums = null;
	$images = null;
	$cids = trim($vars['cats']);
	if (strlen($cids) != strspn($cids, "0123456789,")) {
		$cids = '';
		$vars['cats'] = '';
	}
	$imgs = trim($vars['imgs']);
	if (strlen($imgs) != strspn($imgs, "0123456789,")) {
		$imgs = '';
		$vars['imgs'] = '';
	}
	$categories = '';
	$xml_filename = '';
	if( !empty($cids) && $cids{strlen($cids)-1} == ',')
	{
		$cids = substr($cids, 0, -1);
	}
	if( !empty($imgs) && $imgs{strlen($imgs)-1} == ',')
	{
		$imgs = substr($imgs, 0, -1);
	}
	//check for xml file
	if( !empty($vars['cats']) )
	{
		$xml_filename = "cat_".str_replace(',', '', $cids) . '.xml';	
	}
	elseif( !empty($vars['imgs']))
	{
		$xml_filename = "image_".str_replace(',', '', $imgs) . '.xml';
	}
	else
	{
		$xml_filename = "pwz_all.xml";
	}
	//die(PWZ_PLUGIN_XML_DIR . '/' . $xml_filename);


	
	if( !empty($vars['cats']) )
	{
		$query = "SELECT * FROM {$wpdb->prefix}pwz_albums WHERE album_id IN($cids) AND status = 1 ORDER BY `order` ASC";
		//print $query;
		$albums = $wpdb->get_results($query, ARRAY_A);
		foreach($albums as $key => $album)
		{
			$images = $gpwz->pwz_get_album_images($album['album_id']);
			if ($images && !empty($images) && is_array($images)) {
				$album_dir = pwz_get_album_url($album['album_id']);//PWZ_PLUGIN_UPLOADS_URL . '/' . $album['album_id']."_".$album['name'];
				if (!isset($first_cat)) {
					$first_cat = $album['album_id'];
				}
				$categories .= '
			<category id="'.$album['album_id'].'">
				<title>'.$album['name'].'</title>
				<description>'.$album['description'].'</description>
				<thumb scale="'.(($ops['cat_scale'] == 'yes') ? 'true' : 'false').'">'.$album_dir."/thumb/".$album['thumb'].'</thumb>	
				';
				foreach($images as $key => $img)
				{
					if( $img['status'] == 0 ) continue;
					
					$categories .= '
<item>
	<name>'.$img['title'].'</name>
	<thumb scale="'.(($ops['thumb_scale'] == 'yes') ? 'true' : 'false').'">'.$album_dir."/thumb/".$img['thumb'].'</thumb>
	<main scale="'.(($ops['pic_scale'] == 'yes') ? 'true' : 'false').'">'.$album_dir."/big/".$img['image'].'</main>
	<price><regular>'.$img['price'].'</regular>
	<updated>'.$img['dprice'].'</updated></price>
		<link target="_self"></link>
	<description>'.strip_tags($img['description']).'</description>
</item>';
				}
				$categories .= '
			</category>
		';
			}
		}
		//$xml_filename = "cat_".str_replace(',', '', $cids) . '.xml';
	}
	elseif( !empty($vars['imgs']))
	{
		$query = "SELECT * FROM {$wpdb->prefix}pwz_images WHERE image_id IN($imgs) AND status = 1 ORDER BY `order` ASC";
		$images = $wpdb->get_results($query, ARRAY_A);
		if ($images && !empty($images) && is_array($images)) {
			if (!isset($first_cat)) {
				$first_cat = 1;
			}
			$categories .= '
			<category id="1">
				<title>All Albums</title>
				<description>All Albums</description>
				<thumb scale="'.(($ops['cat_scale'] == 'yes') ? 'true' : 'false').'"></thumb>	
				';
		foreach($images as $key => $img)
		{
			$album = $gpwz->pwz_get_album($img['category_id']);
			$album_dir = pwz_get_album_url($album['album_id']);//PWZ_PLUGIN_UPLOADS_URL . '/' . $album['album_id']."_".$album['name'];

			if( $img['status'] == 0 ) continue;
			$categories .= '
<item>
	<name>'.$img['title'].'</name>
	<thumb scale="'.(($ops['thumb_scale'] == 'yes') ? 'true' : 'false').'">'.$album_dir."/thumb/".$img['thumb'].'</thumb>
	<main scale="'.(($ops['pic_scale'] == 'yes') ? 'true' : 'false').'">'.$album_dir."/big/".$img['image'].'</main>
	<price><regular>'.$img['price'].'</regular>
	<updated>'.$img['dprice'].'</updated></price>
		<link target="_self"></link>
	<description>'.strip_tags($img['description']).'</description>
</item>';
		}
		$categories .= '
			</category>
		';
		}
	}
	//no values paremeters setted
	else//( empty($vars['cats']) && empty($vars['imgs']))
	{
		$query = "SELECT * FROM {$wpdb->prefix}pwz_albums WHERE status = 1 ORDER BY `order` ASC";
		$albums = $wpdb->get_results($query, ARRAY_A);
		foreach($albums as $key => $album)
		{
			$images = $gpwz->pwz_get_album_images($album['album_id']);
			$album_dir = pwz_get_album_url($album['album_id']);//PWZ_PLUGIN_UPLOADS_URL . '/' . $album['album_id']."_".$album['name'];
			if ($images && !empty($images) && is_array($images)) {
			if (!isset($first_cat)) {
				$first_cat = $album['album_id'];
			}
			$categories .= '
			<category id="'.$album['album_id'].'">
				<title>'.$album['name'].'</title>
				<description>'.$album['description'].'</description>
				<thumb scale="'.(($ops['cat_scale'] == 'yes') ? 'true' : 'false').'">'.$album_dir."/thumb/".$album['thumb'].'</thumb>	
				';
			foreach($images as $key => $img)
			{
				if($img['status'] == 0 ) continue;
				$categories .= '
<item>
	<name>'.$img['title'].'</name>
	<thumb scale="'.(($ops['thumb_scale'] == 'yes') ? 'true' : 'false').'">'.$album_dir."/thumb/".$img['thumb'].'</thumb>
	<main scale="'.(($ops['pic_scale'] == 'yes') ? 'true' : 'false').'">'.$album_dir."/big/".$img['image'].'</main>
	<price><regular>'.$img['price'].'</regular>
	<updated>'.$img['dprice'].'</updated></price>
		<link target="_self"></link>
	<description>'.strip_tags($img['description']).'</description>
</item>';
			}
			$categories .= '
			</category>
		';
			}
		}
		//$xml_filename = "pwz_all.xml";
	}
	
	$defaultcategory = $ops['defaultcategory'];
	if ($defaultcategory == 0) {
		$defaultcategory = $first_cat;
	}
	$xml_tpl = __get_pwz_xml_template($defaultcategory);
	$settings = __get_pwz_xml_settings();
	$xml = str_replace(array('{settings}', '{categories}'), 
						array($settings, $categories), $xml_tpl);
	//write new xml file
	$fh = fopen(PWZ_PLUGIN_XML_DIR . '/' . $xml_filename, 'w+');
	fwrite($fh, $xml);
	fclose($fh);
	//print "<h3>Generated filename: $xml_filename</h3>";
	//print $xml;
	if( file_exists(PWZ_PLUGIN_XML_DIR . '/' . $xml_filename ) )
	{
		//print "<h3>Getting xml file from cache: $xml_filename</h3>";
		$ret_str = 
		'<script src="'.PWZ_PLUGIN_URL.'/js/swfobject.js" language="javascript"></script>
<script language="javascript">
	var flashvars = {
		xmlPath: "'. PWZ_PLUGIN_URL.'/xml/'.$xml_filename.'"
	};
	var params = {
		menu: "false",
		scale: "noScale",
		allowFullscreen: "true",
		allowScriptAccess: "always",
		bgcolor: "",
		wmode: "direct" // can cause issues with FP settings & webcam
	};
	var attributes = {
		id:"powerzoom'.$ops['xml_fname'].'"
	};
	swfobject.embedSWF(
		"'.PWZ_PLUGIN_URL.'/js/wp_powerzoomer.swf", 
		"altContent'.$ops['xml_fname'].'", "'. intval($ops['bannerWidth']).'px", "'.intval($ops['bannerHeight']).'px", "10.0.0", 
		"'.PWZ_PLUGIN_URL.'/js/expressInstall.swf", 
		flashvars, params, attributes);

</script>
<div id="altContent'.$ops['xml_fname'].'">
	<h1>Power zoomer</h1>
	<p><a href="http://www.adobe.com/go/getflashplayer">Get Adobe Flash player</a></p>
</div>';

//echo PWZ_PLUGIN_UPLOADS_URL."<hr>";
//		print $xml;
		return $ret_str;
	}
	return true;
}
function __get_pwz_xml_template($defaultcategory)
{
	$xml_tpl = '<?xml version="1.0" encoding="utf-8" ?>
<data>
	<settings>
		<defaultcategory id="'.$defaultcategory.'" />
		{settings}
		<content>
		{categories}
	</content>
</data>
';
	return $xml_tpl;
}
?>