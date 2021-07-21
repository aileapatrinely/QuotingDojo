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
    //elseif ensuring field length requirements met and setting error statement
    }elseif(strlen($_POST['name'])<2){
            $_SESSION['errors'][]="I'm the name police. Your name has to be longer than 2 characters. Fix it!";
    }
    if(empty($_POST['quote'])){
        $_SESSION['errors'][]="The whole point of this is submitting a quote. Fix it!";
    } elseif(strlen($_POST['quote'])<5){
        $_SESSION['errors'][]="Sorry, no short, one word quotes for you. It's gotta be longer than 5 characters. Fix it!";
    }
    //if statement with error counter and reroute to / then die
    if(count($_SESSION['errors'])>0){
        header('location: index.php');
        die();
    //else statement for no errors
    }else{
        //query statement
        $query="INSERT INTO quotes (name, quote, created_at, updated_at) VALUES ('{$_POST['name']}', '{$_POST['quote']}', NOW(), NOW())";
        //set last_quote_id to run the query
        $last_quote_id=run_mysql_query($query);
        //if statement ensuring last_quote_id exists
        if($last_quote_id){
            //query for selecting quotes
            $query="SELECT * FROM quotes";
            //set $quotes and then session'quotes' to be a reverse array of $quotes
            $quotes=fetch_all($query);
            $_SESSION['quotes']=array_reverse('quotes');
            //reroute
            header('location: main.php');
            die();
            //else statement killing it if there is an error with posting quote to db
        }else{
            die("Nope, database didn't want it. Try again.");
        }
    }
//else statement killing it if you managed to get to this page w/o submitting a form
}else{
    die('How the hell did you get here? Go submit the form, fool.');
}
?>