        <?php
        return array(
        'title' => __('<h1>Nice scrolls option panel</h1>', 'vp_textdomain'),
        'logo' => '',
        'menus' => array(
            array(
				'title' => __('<b>Plugin Settings</b>', 'vp_textdomain'),
				'name' => 'menu_3',
				'icon' => '',
				'controls' => array(
				 

				                  array(
								'type' => 'textbox',
								'name' => 'scroll_width',
								'label' => __('SELECT SCROLLBAR WIDTH', 'vp_textdomain'),
								'description' => __('<i>Type scrollbar width in pixel here.</i>', 'vp_textdomain'),
								'default' => '7px',
								
								),
								
								 array(
									'type' => 'color',
									'name' => 'div_color',
									'label' => __('SELECT SCROLLBAR COLOR ', 'vp_textdomain'),
									'description' => __('<i>Color Picker, you can set the scrollbar color.</i>', 'vp_textdomain'),
									'default' => 'rgba(255,0,0,0.5)',
									'format' => 'rgba',
									),
									
								   array(
								'type' => 'textbox',
								'name' => 'scroll_speed',
								'label' => __('SELECT SCROLLBAR SPEED', 'vp_textdomain'),
								'description' => __('<i>Type scrollbar speed here.Large value minimize scroll speed</i>', 'vp_textdomain'),
								'default' => '60',
								
								),
								     array(
								'type' => 'textbox',
								'name' => 'scroll_border',
								'label' => __('SELECT SCROLLBAR BORDER', 'vp_textdomain'),
								'description' => __('<i>Type scrollbar border here.</i>', 'vp_textdomain'),
								'default' => '0px  solid  #000',
								
								),
								   array(
								'type' => 'textbox',
								'name' => 'scroll_border_radius',
								'label' => __('SELECT SCROLLBAR BORDER RADIUS', 'vp_textdomain'),
								'description' => __('<i>Type scrollbar border radius here.</i>', 'vp_textdomain'),
								'default' => '5px',
								
								),
								      array(
								'type' => 'textbox',
								'name' => 'scroll_touch',
								'label' => __('SELECT SCROLLBAR TOUCH BEHAVIOUR ', 'vp_textdomain'),
								'description' => __('<i>Type scrollbar touch behaviour here . only true or false</i>', 'vp_textdomain'),
								'default' => 'true',
								
								),
				
							)
			    )
		                )
                    );
        ?>