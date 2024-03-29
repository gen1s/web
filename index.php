<?php

$components_url = parse_url($_SERVER["REQUEST_URI"]);

$path = $components_url["path"]; 

$path_parts = explode("/", $path);
$path_parts = array_filter($path_parts);
$path_parts = array_slice($path_parts, 0);

$selected_path = "main/404.php";

if(count($path_parts) == 0){
    $selected_path = "main/home.php";
    
}else if(count($path_parts) == 1){
    switch($path_parts[0]){
        case "about-me":
            $selected_path = "main/aboutme.php";
            break;

        case "projects":
            $selected_path = "main/projects.php";
            break;

        case "comments":
            $selected_path = "main/coments.php";
            break;
        
        case "contact-me":
            $selected_path = "main/contactform.php";
            break;
        
        case "thanks":
            $selected_path = "main/thanks.php";
            break;

        case "home":
            $selected_path = "main/home.php";
            break;

        }
}else if(count($path_parts) == 2){
    switch($path_parts[0]){
        case "projects":
            switch($path_parts[1]){
                case "discord-bot":
                    $selected_path = "projectsf/discord-bot.php";
                    break;

                case "encrypt-decrypt":
                    $selected_path = "projectsf/GUI-encrypt-decrypt.php";
                    break;
                
                case "shortcut":
                    $selected_path = "projectsf/shortcut.php";
                    break;
                
                case "website":
                    $selected_path = "projectsf/website.php";
                    break;
                
                case "automated-youtube":
                    $selected_path = "projectsf/automated-youtube.php";
                    break;
                case "tiktok-generator":
                    $selected_path = "projectsf/tiktok-generator.php";
                    break;
            }
            break;
    }
}



include_once $selected_path



?>