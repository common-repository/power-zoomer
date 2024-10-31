<?php
global $wpdb, $gpwz;
$ops = get_option('pwz_settings', array());
//$ops = array_merge($pwz_settings, $ops);
?>
<div class="wrap">
	<h2><?php _e('Create XML File'); ?></h2>
	<form action="" method="post">
		<input type="hidden" name="task" value="save_pwz_settings" />
		<table>
				<tr>
			<td title="<?php _e('Width of object .'); ?>"><?php _e('Gallery Width (px)'); ?></td>
			<td><input type="text" name="settings[bannerWidth]"   value="<?php print @$ops['bannerWidth']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Height of object '); ?>"><?php _e('Gallery Height (px)'); ?></td>
			<td><input type="text" name="settings[bannerHeight]"   value="<?php print @$ops['bannerHeight']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Position'); ?>"><?php _e('Position'); ?></td>
			<td>
				<select name="settings[position]">
					<option value="top" <?php print (@$ops['position'] == 'top') ? 'selected' : ''; ?>><?php _e('top'); ?></option>
					<option value="bottom" <?php print (@$ops['position'] == 'bottom') ? 'selected' : ''; ?>><?php _e('bottom'); ?></option>		
				</select>
			</td>
		</tr>		
		<tr>
			<td title="<?php _e('Height'); ?>"><?php _e('Height'); ?></td>
			<td><input type="text" name="settings[height_tp]"   value="<?php print @$ops['height_tp']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Background color'); ?>"><?php _e('Background color'); ?></td>
			<td><input type="text" name="settings[background_color_tp]" class="color {hash:false,caps:false}" value="<?php print @$ops['background_color_tp']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Thumb Max Height'); ?>"><?php _e('Thumb Max Height'); ?></td>
			<td><input type="text" name="settings[thumb_height_max]"   value="<?php print @$ops['thumb_height_max']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Thumb Max Width'); ?>"><?php _e('Thumb Max Width'); ?></td>
			<td><input type="text" name="settings[thumb_width_max]"   value="<?php print @$ops['thumb_width_max']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Thumb step reduction'); ?>"><?php _e('Thumb step reduction'); ?></td>
			<td><input type="text" name="settings[thumb_step_reduction]"   value="<?php print @$ops['thumb_step_reduction']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Thumb border size'); ?>"><?php _e('Thumb border size'); ?></td>
			<td><input type="text" name="settings[thumb_border_size_tp]"   value="<?php print @$ops['thumb_border_size_tp']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Thumb border color'); ?>"><?php _e('Thumb border color'); ?></td>
			<td><input type="text" name="settings[thumb_border_color]" class="color {hash:false,caps:false}" value="<?php print @$ops['thumb_border_color']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Thumb time animation'); ?>"><?php _e('Thumb time animation'); ?></td>
			<td><input type="text" name="settings[thumb_time_animation]"   value="<?php print @$ops['thumb_time_animation']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Font color'); ?>"><?php _e('Font color'); ?></td>
			<td><input type="text" name="settings[font_color]" class="color {hash:false,caps:false}" value="<?php print @$ops['font_color']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Font size'); ?>"><?php _e('Font size'); ?></td>
			<td><input type="text" name="settings[font_size]"   value="<?php print @$ops['font_size']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Background color'); ?>"><?php _e('Background color'); ?></td>
			<td><input type="text" name="settings[background_color_it]" class="color {hash:false,caps:false}" value="<?php print @$ops['background_color_it']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Height'); ?>"><?php _e('Height'); ?></td>
			<td><input type="text" name="settings[height_ctrl]"   value="<?php print @$ops['height_ctrl']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Background color'); ?>"><?php _e('Background color'); ?></td>
			<td><input type="text" name="settings[background_color_ctrl]" class="color {hash:false,caps:false}" value="<?php print @$ops['background_color_ctrl']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Background alpha'); ?>"><?php _e('Background alpha'); ?></td>
			<td><input type="text" name="settings[background_alpha_ctrl]"   value="<?php print @$ops['background_alpha_ctrl']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Change time'); ?>"><?php _e('Change time'); ?></td>
			<td><input type="text" name="settings[change_time]"   value="<?php print @$ops['change_time']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Showing time'); ?>"><?php _e('Showing time'); ?></td>
			<td><input type="text" name="settings[showing_time]"   value="<?php print @$ops['showing_time']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Auto play'); ?>"><?php _e('Auto play'); ?></td>
			<td>
				<select name="settings[auto_play]">
					<option value="no" <?php print (@$ops['auto_play'] == 'no') ? 'selected' : ''; ?>><?php _e('no'); ?></option>
					<option value="yes" <?php print (@$ops['auto_play'] == 'yes') ? 'selected' : ''; ?>><?php _e('yes'); ?></option>		
				</select>
			</td>
		</tr>		
		<tr>
			<td title="<?php _e('Max zoom'); ?>"><?php _e('Max zoom'); ?></td>
			<td><input type="text" name="settings[max_zoom]"   value="<?php print @$ops['max_zoom']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Background color'); ?>"><?php _e('Background color'); ?></td>
			<td><input type="text" name="settings[color_background]" class="color {hash:false,caps:false}" value="<?php print @$ops['color_background']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Background over color'); ?>"><?php _e('Background over color'); ?></td>
			<td><input type="text" name="settings[color_background_over]" class="color {hash:false,caps:false}" value="<?php print @$ops['color_background_over']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Icon color'); ?>"><?php _e('Icon color'); ?></td>
			<td><input type="text" name="settings[color_icon]" class="color {hash:false,caps:false}" value="<?php print @$ops['color_icon']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Icon color over'); ?>"><?php _e('Icon color over'); ?></td>
			<td><input type="text" name="settings[color_icon_over]" class="color {hash:false,caps:false}" value="<?php print @$ops['color_icon_over']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Background color'); ?>"><?php _e('Background color'); ?></td>
			<td><input type="text" name="settings[background_color_dsc]" class="color {hash:false,caps:false}" value="<?php print @$ops['background_color_dsc']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Background alpha'); ?>"><?php _e('Background alpha'); ?></td>
			<td><input type="text" name="settings[background_alpha_dsc]"   value="<?php print @$ops['background_alpha_dsc']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Font size'); ?>"><?php _e('Font size'); ?></td>
			<td><input type="text" name="settings[font_size_dsc]"   value="<?php print @$ops['font_size_dsc']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Font color'); ?>"><?php _e('Font color'); ?></td>
			<td><input type="text" name="settings[font_color_dsc]" class="color {hash:false,caps:false}" value="<?php print @$ops['font_color_dsc']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Show/Hide window of categories when the gallery loads initially'); ?>"><?php _e('Category list initially'); ?></td>
			<td>
				<select name="settings[showOnStart]">
					<option value="on" <?php print (@$ops['showOnStart'] == 'on') ? 'selected' : ''; ?>><?php _e('Show'); ?></option>
					<option value="off" <?php print (@$ops['showOnStart'] == 'off') ? 'selected' : ''; ?>><?php _e('Hide'); ?></option>		
				</select>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Height'); ?>"><?php _e('Height'); ?></td>
			<td><input type="text" name="settings[height_clist]"   value="<?php print @$ops['height_clist']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Background color'); ?>"><?php _e('Background color'); ?></td>
			<td><input type="text" name="settings[background_color_clist]" class="color {hash:false,caps:false}" value="<?php print @$ops['background_color_clist']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Category image scale'); ?>"><?php _e('Category image scale'); ?></td>
			<td>
				<select name="settings[cat_scale]">
					<option value="yes" <?php print (@$ops['cat_scale'] == 'yes') ? 'selected' : ''; ?>><?php _e('yes'); ?></option>
					<option value="no" <?php print (@$ops['cat_scale'] == 'no') ? 'selected' : ''; ?>><?php _e('no'); ?></option>		
				</select>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Title size'); ?>"><?php _e('Title size'); ?></td>
			<td><input type="text" name="settings[title_size]"   value="<?php print @$ops['title_size']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Description size'); ?>"><?php _e('Description size'); ?></td>
			<td><input type="text" name="settings[description_size]"   value="<?php print @$ops['description_size']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Title color'); ?>"><?php _e('Title color'); ?></td>
			<td><input type="text" name="settings[title_color]" class="color {hash:false,caps:false}" value="<?php print @$ops['title_color']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Description color'); ?>"><?php _e('Description color'); ?></td>
			<td><input type="text" name="settings[description_color]" class="color {hash:false,caps:false}" value="<?php print @$ops['description_color']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Background color'); ?>"><?php _e('Background color'); ?></td>
			<td><input type="text" name="settings[background_color_itm]" class="color {hash:false,caps:false}" value="<?php print @$ops['background_color_itm']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Item over color'); ?>"><?php _e('Item over color'); ?></td>
			<td><input type="text" name="settings[color_over]" class="color {hash:false,caps:false}" value="<?php print @$ops['color_over']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Width'); ?>"><?php _e('Width'); ?></td>
			<td><input type="text" name="settings[width_itm]"   value="<?php print @$ops['width_itm']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Height'); ?>"><?php _e('Height'); ?></td>
			<td><input type="text" name="settings[height_itm]"   value="<?php print @$ops['height_itm']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Image scale'); ?>"><?php _e('Image scale'); ?></td>
			<td>
				<select name="settings[pic_scale]">
					<option value="yes" <?php print (@$ops['pic_scale'] == 'yes') ? 'selected' : ''; ?>><?php _e('yes'); ?></option>
					<option value="no" <?php print (@$ops['pic_scale'] == 'no') ? 'selected' : ''; ?>><?php _e('no'); ?></option>		
				</select>
			</td>
		</tr>		
		<tr>
			<td title="<?php _e('Thumb width'); ?>"><?php _e('Thumb width'); ?></td>
			<td><input type="text" name="settings[thumb_width]"   value="<?php print @$ops['thumb_width']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Thumb height'); ?>"><?php _e('Thumb height'); ?></td>
			<td><input type="text" name="settings[thumb_height]"   value="<?php print @$ops['thumb_height']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Thumb border size'); ?>"><?php _e('Thumb border size'); ?></td>
			<td><input type="text" name="settings[thumb_border_size]"   value="<?php print @$ops['thumb_border_size']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Thumb border color'); ?>"><?php _e('Thumb border color'); ?></td>
			<td><input type="text" name="settings[thumb_border_color_itm]" class="color {hash:false,caps:false}" value="<?php print @$ops['thumb_border_color_itm']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Thumb scale'); ?>"><?php _e('Thumb scale'); ?></td>
			<td>
				<select name="settings[thumb_scale]">
					<option value="yes" <?php print (@$ops['thumb_scale'] == 'yes') ? 'selected' : ''; ?>><?php _e('yes'); ?></option>
					<option value="no" <?php print (@$ops['thumb_scale'] == 'no') ? 'selected' : ''; ?>><?php _e('no'); ?></option>		
				</select>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Background color'); ?>"><?php _e('Background color'); ?></td>
			<td><input type="text" name="settings[background_color_scroll]" class="color {hash:false,caps:false}" value="<?php print @$ops['background_color_scroll']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Element color'); ?>"><?php _e('Element color'); ?></td>
			<td><input type="text" name="settings[element_color]" class="color {hash:false,caps:false}" value="<?php print @$ops['element_color']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Element icon color'); ?>"><?php _e('Element icon color'); ?></td>
			<td><input type="text" name="settings[element_icon_color]" class="color {hash:false,caps:false}" value="<?php print @$ops['element_icon_color']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Background color'); ?>"><?php _e('Background color'); ?></td>
			<td><input type="text" name="settings[background_color_close]" class="color {hash:false,caps:false}" value="<?php print @$ops['background_color_close']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Icon color'); ?>"><?php _e('Icon color'); ?></td>
			<td><input type="text" name="settings[icon_color]" class="color {hash:false,caps:false}" value="<?php print @$ops['icon_color']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Background over color'); ?>"><?php _e('Background over color'); ?></td>
			<td><input type="text" name="settings[background_color_over]" class="color {hash:false,caps:false}" value="<?php print @$ops['background_color_over']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Icon over color'); ?>"><?php _e('Icon over color'); ?></td>
			<td><input type="text" name="settings[icon_color_over]" class="color {hash:false,caps:false}" value="<?php print @$ops['icon_color_over']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Price tag enable'); ?>"><?php _e('Price tag'); ?></td>
			<td>
				<select name="settings[priceTag]">
					<option value="yes" <?php print (@$ops['priceTag'] == 'yes') ? 'selected' : ''; ?>><?php _e('yes'); ?></option>
					<option value="no" <?php print (@$ops['priceTag'] == 'no') ? 'selected' : ''; ?>><?php _e('no'); ?></option>		
				</select>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Currency position'); ?>"><?php _e('Currency position'); ?></td>
			<td>
				<select name="settings[currency_position]">
					<option value="BL" <?php print (@$ops['currency_position'] == '') ? 'BL' : ''; ?>><?php _e('Bottom Left'); ?></option>
					<option value="BR" <?php print (@$ops['currency_position'] == 'BR') ? 'selected' : ''; ?>><?php _e('Bottom Right'); ?></option>
					<option value="TL" <?php print (@$ops['currency_position'] == 'TL') ? 'selected' : ''; ?>><?php _e('Top Left'); ?></option>
					<option value="TR" <?php print (@$ops['currency_position'] == 'TR') ? 'selected' : ''; ?>><?php _e('Top Right'); ?></option>
				</select>
			</td>
		</tr>		
		<tr>
			<td title="<?php _e('Text size'); ?>"><?php _e('Text size'); ?></td>
			<td><input type="text" name="settings[textSize]"   value="<?php print @$ops['textSize']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Currency base color 1'); ?>"><?php _e('Currency color 1'); ?></td>
			<td><input type="text" name="settings[currency_col1]" class="color {hash:false,caps:false}" value="<?php print @$ops['currency_col1']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Currency color 1 alpha'); ?>"><?php _e('Currency color 1 alpha'); ?></td>
			<td><input type="text" name="settings[currency_col1a]"   value="<?php print @$ops['currency_col1a']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Currency base color 2'); ?>"><?php _e('Currency color 2'); ?></td>
			<td><input type="text" name="settings[currency_col2]" class="color {hash:false,caps:false}" value="<?php print @$ops['currency_col2']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Currency color 2 alpha'); ?>"><?php _e('Currency color 2 alpha'); ?></td>
			<td><input type="text" name="settings[currency_col2a]"   value="<?php print @$ops['currency_col2a']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Currency label color'); ?>"><?php _e('Currency label color'); ?></td>
			<td><input type="text" name="settings[currency_label]" class="color {hash:false,caps:false}" value="<?php print @$ops['currency_label']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Currency label color alpha'); ?>"><?php _e('Currency label color alpha'); ?></td>
			<td><input type="text" name="settings[currency_labela]"   value="<?php print @$ops['currency_labela']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Currency label bold'); ?>"><?php _e('Currency label bold'); ?></td>
			<td>
				<select name="settings[currency_labelb]">
					<option value="yes" <?php print (@$ops['currency_labelb'] == 'yes') ? 'selected' : ''; ?>><?php _e('yes'); ?></option>
					<option value="no" <?php print (@$ops['currency_labelb'] == 'no') ? 'selected' : ''; ?>><?php _e('no'); ?></option>		
				</select>
			</td>
		</tr>		
		<tr>
			<td title="<?php _e('Currency symbol'); ?>"><?php _e('Currency symbol'); ?></td>
			<td><input type="text" name="settings[currency_symbol]"   value="<?php print @$ops['currency_symbol']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Price color'); ?>"><?php _e('Price color'); ?></td>
			<td><input type="text" name="settings[price_color]" class="color {hash:false,caps:false}" value="<?php print @$ops['price_color']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Price color alpha'); ?>"><?php _e('Price color alpha'); ?></td>
			<td><input type="text" name="settings[price_colora]"   value="<?php print @$ops['price_colora']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Price label color'); ?>"><?php _e('Price label color'); ?></td>
			<td><input type="text" name="settings[price_label]" class="color {hash:false,caps:false}" value="<?php print @$ops['price_label']; ?>" /></td>
		</tr>		
		<tr>
			<td title="<?php _e('Price label color alpha'); ?>"><?php _e('Price label color alpha'); ?></td>
			<td><input type="text" name="settings[price_labela]"   value="<?php print @$ops['price_labela']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Enter comma seperated Category Id\'s you would like to display products related to a perticular Category. 0 for showing all products and all categories'); ?>"><?php _e('Category Id'); ?></td>
			<td><input type="text" name="settings[category_id]"   value="<?php print @$ops['category_id']; ?>" /></td>
		</tr> 
		<tr>
			<td title="<?php _e('Type ID number for default category to show. 0 first category.'); ?>"><?php _e('Default category Id'); ?></td>
			<td><input type="text" name="settings[defaultcategory]"   value="<?php print @$ops['defaultcategory']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('XML file name without extension. Used for different instances. Mandatory for multiple instances on one page.'); ?>"><?php _e('XML file name'); ?></td>
			<td><input type="text" name="settings[xml_fname]"   value="<?php print @$ops['xml_fname']; ?>" /></td>
		</tr>
		</table>
	<p><button type="submit" class="button-primary"><?php _e('Save Config'); ?></button></p>
	</form>
</div>