<?php
class massage{
    const MSG = "Thanks for using VS code ";

    function newmsg(){
        echo massage::MSG;
    }
}
 $massage = new massage();
 $massage->newmsg();

?>