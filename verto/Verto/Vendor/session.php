<?php 
@ob_start();
function my_session_start()
{
      $sn = session_name();
      if (isset($_COOKIE[$sn])) {
          $sessid = $_COOKIE[$sn];
      } else if (isset($_GET[$sn])) {
          $sessid = $_GET[$sn];
      } else {
          return session_start();
      }

     if (!preg_match('/^[a-zA-Z0-9,\-]{22,40}$/', $sessid)) {
          return false;
      }
      return session_start();
}

if (session_status() == PHP_SESSION_NONE) {
    

if ( !my_session_start() ) {
    session_id( uniqid() );
    session_start();
    session_regenerate_id();
}
    
}
?>