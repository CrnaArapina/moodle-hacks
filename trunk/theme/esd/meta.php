<!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="<?php echo $CFG->httpsthemewww ?>/custom_corners/styles_ie7.css" />
<![endif]-->
<!--[if IE 6]>
    <link rel="stylesheet" type="text/css" href="<?php echo $CFG->httpsthemewww ?>/custom_corners/styles_ie6.css" />
<![endif]-->
<?php

    /* Output custom.css optionally */
    global $CFG;
    if (file_exists ($CFG->dataroot.'/custom.css')) {
        echo "<style type='text/css'>\n";
        readfile ($CFG->dataroot.'/custom.css');
        echo "</style>\n";
    }

