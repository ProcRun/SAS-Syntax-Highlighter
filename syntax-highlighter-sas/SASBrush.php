<?php
/*
Plugin Name: SyntaxHighlighter Evolved: SAS Brush
Description: Adds support for the SAS Language
Author: ProcRun
Version: 0.1
Author URI: http://www.procrun.com
*/
 
// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_sas_regscript' );
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_sas_addlang' );
 
// Register the brush file with WordPress
function syntaxhighlighter_sas_regscript() {
    wp_register_script( 'syntaxhighlighter-brush-sas', plugins_url( 'shBrushSAS.js', __FILE__ ), array('syntaxhighlighter-core'), '1.2.3' );
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_sas_addlang( $brushes ) {
    $brushes['sas'] = 'sas';
    $brushes['SAS'] = 'sas';
 
    return $brushes;
}
 
?>