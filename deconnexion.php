<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />

<!-- cette page permet la déconnexion et le retour vers la page d'acceuil-->
 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php
session_start();
session_destroy();
header('location:index.php');
exit;
?>