<?php
// Flag
function wpml_shortcode_lang() {
 
    $languages = icl_get_languages('skip_missing=0');
 
    if( 1 < count( $languages ) ) {
        $s = "";
        foreach( (array)$languages as $language ) {
            $s .= '<span><a href="' . $language['url'] . '"><img src="' . $language['country_flag_url'] . '" alt="" /> ' . $language['native_name'] . '</a></span> ';
        }
    }
 
    return $s;
}
add_shortcode( 'wpml_custom_lang', 'wpml_shortcode_lang' );

// Usage 
[wpml_custom_lang]
//------------------------------------------------------

// Country Code 
function nf_mon(){
    $languages = icl_get_languages('skip_missing=0');
 
    $items = "";
    if( ! empty( $languages ) ) {
        foreach( $languages as $l ){
            if(  $l['language_code']==mon ) { 
            // !$l[active] 
                $items2 .= '<a href="' . $l['url'] . ' " class="lang_sel_sel icl-en"> MON </a>';
            }
            
        }
    }
 
    return $items2;
}

// Usage
<div id="lang">
    <ul>
        <li>  
            <?php echo nf_mon(); ?>  
        </li>
    </ul>
</div>
//------------------------------------------------------
$language_code == mon;
$country_flag_url == abc.com/abc.png;
$native_name == myanmar;
$default_locale == en_US;
?>
