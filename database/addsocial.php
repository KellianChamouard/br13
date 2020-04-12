<?php

include('database.php');

$url_insta = $_POST['url_insta'];
$url_fb = $_POST['url_fb'];
$url_yt = $_POST['url_yt'];
$url_twitter = $_POST['url_twitter'];

$reqp = $bdd->prepare('UPDATE social SET url_social = :url_insta  WHERE name_social = "instagram"');
$reqp->execute(array(
	':url_insta' => $url_insta
    ));
    
$reqs = $bdd->prepare('UPDATE social SET url_social = :url_fb  WHERE name_social = "facebook"');
$reqs->execute(array(
	':url_fb' => $url_fb
    ));
    
$reqt = $bdd->prepare('UPDATE social SET url_social = :url_yt  WHERE name_social = "youtube"');
$reqt->execute(array(
	':url_yt' => $url_yt
    ));
    
$reqq = $bdd->prepare('UPDATE social SET url_social = :url_twitter  WHERE name_social = "twitter"');
$reqq->execute(array(
	':url_twitter' => $url_twitter
    ));

header('Location: ../administration/index.php');
exit();

?>