<?php

function curl_get_contents( $url )
{
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}

function pre( $data )
{  
  echo '<pre>';
  print_r( $data );
  echo '</pre>';  
}

function secure()
{  
  if( !isset( $_SESSION['id'] ) )
  {    
    set_message("You must first log in to view this page.");
    header( 'Location: login.php' );
    die();    
  }  
}

function set_message( $message )
{  
  $_SESSION['message'] = $message;  
}

function get_message()
{  
  if( isset( $_SESSION['message'] ) )
  {    
    echo '<div class="container-fluid text-center bg-warning-subtle fs-4 p-3">
        '.$_SESSION['message'].'
      </div>';

    unset( $_SESSION['message'] );    
  }  
}