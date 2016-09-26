<?php
	function wpb_customize_register($wp_customize){

		//Showcase
		$wp_customize->add_section('showcase', array(
			'title' => __('Showcase','mytheme'),
			'description' => sprintf(__('Options for showcase','mytheme')),
			'priority' => 130
			));

				$wp_customize->add_setting('showcase_heading', array(
			'default' => _x('Custom Bootstrap Wordpress Theme','mytheme'),
			'type' => 'theme_mod'
			));

			$wp_customize->add_control('showcase_heading', array(
			'label' => __('Heading','mytheme'),
			'section' => 'showcase',
			'priority' => 1
			));

			$wp_customize->add_setting('showcase_text', array(
			'default' => _x('Lorem Ipsum','mytheme'),
			'type' => 'theme_mod'
			));

			$wp_customize->add_control('showcase_text', array(
			'label' => __('Text','mytheme'),
			'section' => 'showcase',
			'priority' => 2
			));

	}
	add_action('cutomize_register','wpb_customize_register');