<?php  // $Id: view.php,v 1.61 2007/01/27 19:14:23 skodak Exp $

    require_once("../../config.php");
    require ($CFG->dirroot.'/mod/resource/lib.php');

    // Are we just loading or posting?
    $is_the_form = $_SERVER['REQUEST_METHOD'] != 'POST';

    if ($is_the_form) {

        // TODO: Should retrieve the correct resource id
        $id = "10";

    } else {

        // TODO: Should retrieve the correct resource id
        $id = "13";

        // TODO: Retrieve the default contact string
        $subject = "[Contact]";

        if (isset ($_REQUEST['subject'])) {
            $subject .= " ".$_REQUEST['subject'];
        }

        $message  = "Contact fields\n";
        $message .= "==============\n";

        foreach ($_REQUEST as $k => $v) {

            // If message field exists, it will be appended at the end
            if ($k == "message") {
                continue;
            }

            $message .= "  ".$k.": ".$v."\n";
        }
        $message .= "\n";

        if (isset ($_REQUEST['message'])) {
            $message .= "Message\n";
            $message .= "=======\n";
            $message .= $_REQUEST['message'];
            $message .= "\n--//--\n";
        }

        // TODO: Retrieve from configuration To: and From:
        mail( "marcond@gmail.com", $subject, $message, "From: robot@educacaosemdistancia.org" );
    }

    if (! $cm = get_coursemodule_from_id('resource', $id)) {
        error('Course Module ID was incorrect');
    }

    if (! $resource = get_record('resource', 'id', $cm->instance)) {
        error('Resource ID was incorrect');
    }

    if (! $course = get_record('course', 'id', $cm->course)) {
        error('Incorrect course id');
    }

    require_course_login($course, true, $cm);

    require ($CFG->dirroot.'/mod/resource/type/'.$resource->type.'/resource.class.php');
    $resourceclass = 'resource_'.$resource->type;
    $resourceinstance = new $resourceclass($cm->id);

    // Should we create the proper html form?
    if ($is_the_form) {

        // Create the form on-the-fly
        $form = "<form method='post' action=/mod/contact/index.php>\n";
        $form .= $resourceinstance->resource->alltext;
        $form .= "</form>";
        $resourceinstance->resource->alltext = $form;
    }

    $resourceinstance->display();

?>
