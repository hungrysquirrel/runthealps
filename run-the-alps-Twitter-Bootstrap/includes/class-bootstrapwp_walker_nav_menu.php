<?php
     /**
     * class Bootstrap_Walker_Nav_Menu()
     *
     * Extending Walker_Nav_Menu to modify class assigned to submenu ul element
     *
     * @author Rachel Baker
     **/
class Bootstrapwp_Walker_Nav_Menu extends Walker_Nav_Menu {

	function __construct() {

	}
    // function start_lvl(&$output, $depth) { Change made on 12/16/2018 saw issues on staging
  function start_lvl(&$output, $depth = 0, $args = array()) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
  }

}