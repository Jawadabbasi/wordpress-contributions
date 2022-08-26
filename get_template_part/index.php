<?php
if(is_user_logged_in()){
    get_template_part('template-parts/loginuser');
}
else{
    get_template_part('template-parts/nonloginuser');
}
?>
