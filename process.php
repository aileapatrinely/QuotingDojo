<?php
session_start();
require_once('new-connection.php');
$_SESSION['errors'] = [];

//if statement checking if post is empty
    //if/else statement checking for required data (one for each name & quote)
        //elseif ensuring field length requirements met and setting error statement
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
//else statement killing it if you managed to get to this page w/o submitting a form

?>