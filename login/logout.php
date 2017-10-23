<?php  
/** 
 * Date: 23/10/2017
 * Time: 00:11 AM 
 */  
  
session_start();//session is a way to store information (in variables) to be used across multiple pages.  
session_destroy();  
header("Location: ../index.html");//use for the redirection to some page  
?>  
