<?php
session_start();
require_once('new-connection.php');
$_SESSION['errors'] = [];

//if statement checking if post is empty
if(!empty($_POST)){
    //if/else statement checking for required data (one for each name & quote)
    if(empty($_POST['name'])){
        //set them session errors
        $_SESSION['errors'][]= "Name is required. Fix it!";
    }
    //elseif ensuring field length requirements met and setting error statement
    elseif(strlen($_POST['name'])<2){
            $_SESSION['errors'][]="I'm the name police. Your name has to be longer than 2 characters. Fix it!";
    }
    if(empty($_POST['quote'])){
        $_SESSION['errors'][]="The whole point of this is submitting a quote. Fix it!";
    } elseif(strlen($_POST['quote'])<5){
        $_SESSION['errors'][]="Sorry, no short, one word quotes for you. It's gotta be longer than 5 characters. Fix it!";
    }
    //if statement with error counter and reroute to / then die
    //else statement for no errors
        //query statement
        //set last_quote_id to run the query
        //if statement ensuring last_quote_id exists
            //query for selecting quotes
            //set $quotes and then session'quotes' to be a reverse array of $quotes
            //reroute
            die();
            //else statement killing it if there is an error with posting quote to db
}
//else statement killing it if you managed to get to this page w/o submitting a form
else{
    die('How the hell did you get here? Go submit the form, fool.');
}
?>