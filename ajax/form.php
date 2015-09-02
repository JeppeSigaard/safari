<?php
// vi skal ikke bruger header, men WP's funktionsbibliotek
define('WP_USE_THEMES', false); 

// Vores retur encodes til json, så det er nemt at bruge i javascript.
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-Type: application/json');

// Hent wp-load, så vi får mulighed for at bruge wordpress' funktionsarkiv
require '../../../../wp-load.php';


// Klargør response array til senere json_encode();
$response = array();
$response['received'] = 'ok';

if(!isset($_POST['name'])){
    $response['error'] = 'navn mangler';
    echo json_encode($response);
    exit;
}

if(!isset($_POST['email'])){
    $response['error'] = 'email mangler';
    echo json_encode($response);
    exit;
}


$name = wp_strip_all_tags($_POST['name']);
$email = wp_strip_all_tags($_POST['email']);
$detail = (isset($_POST['detail']))  ? wp_strip_all_tags($_POST['detail']) : '';


$new = wp_insert_post(array(
    'post_title' => $name .' - ' .$email,
    'post_content' => $detail,
    'post_type' => 'interessent',
    'post_status'   => 'publish'
),true);


if(is_wp_error($new)){
    $response['error'] = 'kunne ikke oprette tilmeldingen';
    echo json_encode($response);
    exit;
}

update_post_meta($new,'int_email',$email);
update_post_meta($new,'int_name',$name);

$response['success'] = 'ok';
$response['successMessage'] = '<h4 class="success">Tak for din interesse</h4>';
echo json_encode($response);