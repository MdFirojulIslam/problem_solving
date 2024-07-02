<?php

    //Write a PHP  script to store an array of user preferences in a session variable.
    // session_start();

    // $userPreferences = array(
    //     "theme" => "light",
    //     "language" => "Spanish",
    //     "notifications" => true
    // );

    // $_SESSION["preferences"] = $userPreferences;

    // echo "User preferences have been stored in the session variable 'preferences'.";

    session_start();
    $user_preference = array(
        "theme"     => "light",
        "language"  => "spanish",
        "notification" => "true"
    );
    $_SESSION['preference'] = $user_preference;
    echo "User preference has been stored in the session variable 'preference'";


?>