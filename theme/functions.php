<?php 
if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Website settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
  
  // acf_add_options_sub_page(array(
  //   'page_title'  => 'Subpage',
  //   'menu_title'  => 'Subpage',
  //   'parent_slug' => 'theme-general-settings',
  // ));
  
  
} 


function i($arg){
  echo "<svg class=\"icon icon-$arg\"><use xlink:href=\"".get_bloginfo('template_directory')."/img/sprite.svg#icon-$arg\"></use></svg>";
}
?>