<?php
    # include the API
    include('../../../../../core/inc/api.php');
    
    $API  = new PerchAPI(1.0, 'perch_members');
    $Lang = $API->get('Lang');

    # include your class files
    include('../../PerchMembers_Members.class.php');
    include('../../PerchMembers_Member.class.php');
    include('../../PerchMembers_Tags.class.php');
    include('../../PerchMembers_Tag.class.php');
    include('../../PerchMembers_Forms.class.php');
    include('../../PerchMembers_Form.class.php');


    # Set the page title
    $Perch->page_title = $Lang->get('Edit Member Forms');


    # Do anything you want to do before output is started
    include('../../modes/forms.edit.pre.php');
    
    
    # Top layout
    include(PERCH_CORE . '/inc/top.php');

    
    # Display your page
    include('../../modes/forms.edit.post.php');
    
    
    # Bottom layout
    include(PERCH_CORE . '/inc/btm.php');
?>