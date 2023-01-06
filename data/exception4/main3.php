<?php
$model = new UserModel();
try{
  $profile =$model->findProfile(1001);
}catch(Exception$$exception){
  echo file_get_contents('error-unknown.html');
  return;
}catch(PageNotFoundException$exception){
  echo file_get_contents('error-page-not-found.html');
  return;
}