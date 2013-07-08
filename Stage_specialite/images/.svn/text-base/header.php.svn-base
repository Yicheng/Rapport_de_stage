<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="main">
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
  session_start();
    if( isset($_SESSION['authenticated']) )
    {
        if($_SESSION['authenticated'] == 'yes')
        {
            $authenticated = 'yes';
        }
        else
        {
            $authenticated = 'no';
        }
    }
    else
    {
        $authenticated = 'no';
    }

    if($authenticated != 'yes')
    {
        header("Location: http://www.windeo-planet.com/wordpress/login.php");
        exit();
    }
?><!DOCTYPE html>
...
