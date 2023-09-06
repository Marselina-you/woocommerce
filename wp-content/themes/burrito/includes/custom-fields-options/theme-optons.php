<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'Настройки темы' )
	->set_icon( 'dashicons-carrot' )
	->add_tab( 'Шапка', array(
		Field::make( 'select', 'est_header_logic', 'Будет ли использоваться логотип?' )
			->add_options(array(
				'yes' => 'да, я буду использовать логотип',
				'no' => 'нет, я буду использовать текст'
			)),
		Field::make( 'image', 'est_header_logo', 'Логотип' ),
		Field::make( 'text', 'est_header_site_name', 'Название сайта' )
		->set_conditional_logic(array(
			'relation' => 'AND',
			array(
				'field' => 'est_header_logic',
				'value' => 'no',
				'compare' => '=',
			)
		)),
		Field::make( 'text', 'est_header_site_desc', 'Описание сайта' )
		->set_conditional_logic(array(
			'relation' => 'AND',
			array(
				'field' => 'est_header_logic',
				'value' => 'yes',
				'compare' => '=',
			)
		)),
		   
	) )
	->set_icon('dashicons-carrot')
		->add_fields( array(
			Field::make( 'text', 'crb_facebook_link'),
			Field::make( 'text', 'crb_twitter_link'),

		))
	->add_tab( 'Подвал', array(
		Field::make( 'text', 'crb_email', 'Notification Email' ),
		Field::make( 'text', 'crb_phone', 'Phone Number' ),
	) );