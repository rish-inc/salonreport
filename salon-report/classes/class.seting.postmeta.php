<?php
/*
 * seting postmeta
 * $type    = input type
 * $name    = input name
 * $title   = label title
 * $classes = input class Array();
 */

class SR_input {
	public $name_attr;
	public $data, $type, $name, $title, $classes = array();
	public static function input_field ( $type, $name, $title, $classes = NULL ) {
		global $post;
		$attr_id   = $name . '[' . SR_Config::PREFIX . 'report' . '0' . ']';
		$attr_name = $name . '_' . SR_Config::PREFIX . 'report' . '0';
		$value = get_post_meta( $post -> ID, $attr_name, true );
		$class = $classes ? implode( " ", $classes ) : $classes;
		echo '<div class="customer_form_field__item">';
		printf( '<label class="customer_form_field__item__label %s" for="%s">%s</label>', $class, $attr_id, $title );
		echo "\n";;
		printf( '<input type="%s" name="%s" id="%s" value="%s">', $type, $attr_name, $attr_id, $value );
		echo '</div>';
	}
}
