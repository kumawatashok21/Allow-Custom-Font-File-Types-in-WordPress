
//Navigate to Appearance > Theme Editor.


//Insert the following code snippet at the end of the functions.php file:

function custom_upload_mimes($mimes) {
    $mimes['ttf'] = 'font/ttf';   // TrueType font
    $mimes['otf'] = 'font/otf';   // OpenType font
    $mimes['woff'] = 'font/woff';  // Web Open Font Format
    $mimes['woff2'] = 'font/woff2'; // Web Open Font Format 2
    $mimes['eot'] = 'application/vnd.ms-fontobject'; // Embedded OpenType
    $mimes['svg'] = 'image/svg+xml'; // Scalable Vector Graphics
    return $mimes;
}
add_filter('upload_mimes', 'custom_upload_mimes');
