<?php

add_filter( 'custom_menu_order', array($this,'change_note_submenu_order') );

 // function change_note_submenu_order( $menu_ord ) {
        //     if( !current_user_can('manage_options') ) {
        //             return false;
        //     }
        //     $stock_notifier_api = new Stock_Notifier_API();
           
        //     //change menu order
        //     global $submenu;
            
        //     $arr = array();
        //     $arr[] = $submenu['edit.php?post_type=stock_notifier'][12]; // Custom menu page (Omit if unused)
        //     $arr[] = $submenu['edit.php?post_type=stock_notifier'][5];  // Note List
        //     $arr[] = $submenu['edit.php?post_type=stock_notifier'][11];

        //     if( $stock_notifier_api->check_premium_active() ) {
        //         $arr[] = $submenu['edit.php?post_type=stock_notifier'][13];
        //     }
            
         
        //     $submenu['edit.php?post_type=stock_notifier'] = $arr;
          
        //     return $menu_ord;
        // }
