<?php
/*
*		Plugin Name:	Fluid's Custom Post Types and Taxonomies
*		Description:	Fluid's plugin for creating custom post types and taxonomies
*		Version: 1.0
*		Author: Spencer Merritt 
*		License: GPL2
*/

/*  Copyright 2015  Fluid Advertising 

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/





/*===========================================================*/
/*======================  Post Types  =======================*/
/*===========================================================*/

/*
function fluid_post_types() {

	// Post Type's Name Here
	$labels = array(
			'name'							=> 'Plural Name',
			'singular_name'			=> 'Singular Name',
			'menu_name'					=> 'Plural Name',
			'name_admin_bar'		=> 'Singular Name',
			'add_new'						=> 'Add New',
			'add_new_item'			=> 'Add New Singular Name',
			'new_item'					=> 'New Singular Name',
			'edit_item'					=> 'Edit Singular Name',
			'view_item'					=> 'View Singular Name',
			'all_items'					=> 'All Plural Name',
			'search_items'			=> 'Search Plural Name',
			'parent_item_colon' => 'Parent Plural Name:',
			'not_found'					=> 'No plural name found.',
			'not_found_in_trash'=> 'No plural name found in trash.'
		);

	$args = array(
			'labels'						=> $labels,
			'public'						=> true,
			'public_queryable'	=> true,
			'show_ui'						=> true,
			'show_in_menu'			=> true,
			'menu_position'			=> 5,
			'menu_icon'					=> 'dashicons-lightbulb', // Custom icon in WP-admin area
			'query_var'					=> true,
			'rewrite'						=> array( 'slug' => 'change_me' ), // URL of custom post
			'capability_type'		=> 'post',
			'has_archive'				=> true,
			'hierarchical'			=> false,
			'supports'					=> array( 'title', 'editor', 'thumbnail')	// Add other supports here
		);
	register_post_type( 'plural_name', $args );

}
// Init all post types
add_action( 'init', 'fluid_post_types' );

function my_rewrite_flush() {
  // First, we "add" the custom post type via the above written function.
  // Note: "add" is written with quotes, as CPTs don't get added to the DB,
  // They are only referenced in the post_type column with a post entry, 
  // when you add a post of this CPT.
  fluid_post_types();

  // ATTENTION: This is *only* done during plugin activation hook in this example!
  // You should *NEVER EVER* do this on every page load!!
  flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );





/*===========================================================*/
/*======================  Taxonomies  =======================*/
/*===========================================================*/

/*
function fluid_taxonomies() {

	// Taxonomy Name Here
	$labels = array(
			'name'												=> 'Plural Name',
			'singular_name'								=> 'Singular Name',
			'search_items'								=> 'Search Plural Name',
			'popular_items'								=> 'Popular Plural Name',
			'all_items'										=> 'All Plural Name',
			'parent_item'									=> null,
			'parent_item_colon'						=> null,
			'edit_item'										=> 'Edit Singular Name',
			'update_item'									=> 'Update Singular Name',
			'add_new_item'								=> 'Add New Singular Name',
			'new_item_name'								=> 'New Singular Name Name',
			'separate_items_with_commas'	=> 'Seperate Plural Name with commas',
			'add_or_remove_items'					=> 'Add or Remove Items',
			'choose_from_most_used'				=> 'Choose from the most used',
			'not_found'										=> 'No Plural Name found.',
			'menu_name'										=> 'Plural Name'
		);

	$args = array(
			'hierarchical'					=> true, // "True" for "Category Style", "False" for "Tag Style"
			'labels'								=> $labels,
			'show_ui'								=> true,
			'show_admin_column'			=> true,
			'update_count_callback'	=> '_update_post_term_count',
			'query_var'							=> true,
			'rewrite'								=> array( 'slug' => 'change_me' ) // URL of taxonomy
		);

	register_taxonomy( 'plural_name', array( 'post_type_to_associate_with' ), $args );

}	
// Init all taxonomies
add_action( 'init', 'fluid_taxonomies' );
*/