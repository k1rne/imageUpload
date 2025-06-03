<?php

function inputFields($placeholder,$name,$value,$type){
    $element = "
      <div class=\"form-group my-4\">
               <input type='$type' name='$name' placeholder='$placeholder' class=\"form-control mt-5\" value='$value' autocomplete=\"off\" >
            </div>
            ";
    echo $element;
}

?>