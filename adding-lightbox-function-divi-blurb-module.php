<?php 
function add_classes_to_linked_images($html) { $classes = 'et_pb_lightbox_image'; // can do multiple classes, separate with space $patterns = array(); $replacements = array(); $patterns[0] = ‘/]*class)([^>]*)>\s*]*)>\s*< \/a>/’; // matches img tag wrapped in anchor tag where anchor tag where anchor has no existing classes
$replacements[0] = '';
$patterns[1] = '/]*)class="([^"]*)"([^>]*)>\s*]*)>\s*< \/a>/'; // matches img tag wrapped in anchor tag where anchor has existing classes contained in double quotes
$replacements[1] = '';
$patterns[2] = '/]*)class=\'([^\']*)\'([^>]*)>\s*]*)>\s*< \/a>/'; // mathches img tag wrapped in anchor tag where anchor has existing classes contained in single quotes
$replacements[2] = '';
$html = preg_replace($patterns, $replacements, $html);
return $html;


}
add_filter(‘the_content’, ‘add_classes_to_linked_images’, 100, 1);

?>
