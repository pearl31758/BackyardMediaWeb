<?php
class logout_sess
{
    public function logout_sess(){
       
    }
}

if (isset($_POST['logout'])){
    $_SESSION = [];
    $params = session_get_cookie_params();
    setcookie(session_name(),'',time() - 86400, $params['path'],
        $params['domain'], $params['secure'],$params['httponly']);
    session_destroy();
    header('Location: session_01.php');
    exit;
}
?>
