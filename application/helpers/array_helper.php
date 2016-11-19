<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

    Function ArrayMergeKeepKeys() {
          $arg_list = func_get_args();
          foreach((array)$arg_list as $arg){
              foreach((array)$arg as $K => $V){
                  $Zoo[$K]=$V;
              }
          }
        return $Zoo;
    }

    
?>
