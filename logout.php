<?php  
/** 
 * Created by Deeshma
 
 */  
  
session_start();//session is a way to store information (in variables) to be used across multiple pages.  
session_destroy();  
header("Location: index.html");//use for the redirection to some page  
?>  