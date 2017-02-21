<?php
function ath_customize_register( $wp_customize ) {

  $wp_customize->add_setting( 'phone', array(
		'default'		 	=> '',
		'transport'   => 'refresh',
	) );
	$wp_customize->add_control( 'phone', array(
			'type' 			=> 'text',
			'label' 		=> 'Telefon',
			'section' 	=> 'title_tagline',
			'settings'  => 'phone',
	) );

  $wp_customize->add_setting( 'fax', array(
		'default'		 	=> '',
		'transport'   => 'refresh',
	) );
	$wp_customize->add_control( 'fax', array(
			'type' 			=> 'text',
			'label' 		=> 'Fax',
			'section' 	=> 'title_tagline',
	) );

  $wp_customize->add_setting( 'address', array('default'	=> '','transport'   => 'refresh') );
  $wp_customize->add_control( 'address', array(
      'type' 			=> 'text',
      'label' 		=> 'Adresse',
      'section' 	=> 'title_tagline',
  ) );
  $wp_customize->add_setting( 'postcode', array('default'	=> '','transport'   => 'refresh') );
  $wp_customize->add_control( 'postcode', array(
      'type' 			=> 'text',
      'label' 		=> 'Postleitzahl',
      'section' 	=> 'title_tagline',
  ) );
  $wp_customize->add_setting( 'city', array('default'	=> '','transport'   => 'refresh') );
  $wp_customize->add_control( 'city', array(
      'type' 			=> 'text',
      'label' 		=> 'Stadt',
      'section' 	=> 'title_tagline',
  ) );

  $wp_customize->add_setting( 'mail', array(
    'default'		 	=> '',
    'transport'   => 'refresh',
  ) );
  $wp_customize->add_control( 'mail', array(
      'type' 			=> 'text',
      'label' 		=> 'E-Mail',
      'section' 	=> 'title_tagline',
  ) );
}
add_action( 'customize_register', 'ath_customize_register', 11 );
