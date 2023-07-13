<?php

function custom_module_my_custom_hook() {
  $message = "This is a custom message without arguments.";
  \Drupal::messenger()->addMessage($message);
}

function custom_module_preprocess_page(&$variables) {

    if ($variables['is_front']) {
      $message = custom_module_my_custom_hook();
      $variables['custom_message'] = $message;
      echo $message;
    }

  }
?>  

 