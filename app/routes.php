<?php
//call to a default route
$app->get('/', function ($request, $response){
   return "<div align='center'><h1>Api test Jordi Cuevas</h1></div>";
});

//we create a facebook app endpoint
$app->get('/profile/facebook/{profile_id:[0-9]+}', function ($request, $response,array $args) use ($app, $fb){
    //we get the profile id and make the call  
    $facebookProfileId = $args['profile_id'];
    $response->getBody()->write("Facebook Profile ID: $facebookProfileId ");
    try {
       $response = $fb->get('/'.$facebookProfileId.'?fields=id,first_name,last_name',FACEBOOK_ACCESS_TOKEN);
    }catch(Facebook\Exceptions\FacebookResponseException $e) {
         echo 'Graph returned an error: ' . $e->getMessage();
         exit;
    }catch(Facebook\Exceptions\FacebookSDKException $e) {
         echo 'Facebook SDK returned an error: ' . $e->getMessage();
         exit;
    }

    $user =  $response->getGraphUser(); 
    echo "<pre>"; 
      echo json_encode($response->getDecodedBody());
    echo "</pre>"; 
});