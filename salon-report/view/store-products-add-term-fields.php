<?php
/*
 * add custom fields for term of store-products taxonomy
 */
function sr_add_term_fields_store_products( $store_products ) {
	wp_nonce_field( 'term_fields_store_products', 'sr_store_products_term_nonce' );
	?>
	<div class="form-field">
		<label for="sr_custom_store_products_price">料金</label>
		<input type="number" name="sr_custom_store_products_price" id="sr_custom_store_products_price" size="25" value="">
	</div>
	<?php
}
add_action( 'store_products_add_form_fields', 'sr_add_term_fields_store_products' );
