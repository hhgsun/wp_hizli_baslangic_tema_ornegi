<?php

function register_custom_menus() {
  register_nav_menus(
    array(
      'ana-menu' => __( 'Ana Menü' ),
      //...buraya fazladan eklemek istediğiniz menüler gelebilir.
    )
  );
}
add_action( 'init', 'register_custom_menus' );