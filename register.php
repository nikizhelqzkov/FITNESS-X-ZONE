<?php

require_once "boot.php";
?>
<script>
    alert("ACTIVATE YOUR PROFILE FROM YOUR MAIL!")
</script>
<?php

$error = '';
if (isset($_POST['username']) && isset($_POST['email'])) {
    $user = new UserController();
    if($user->save())
    {
        header('Location:/localhost/');
        die();
    }
    
    
}
echo "ACTIVATE YOUR PROFILE FROM YOUR MAIL!";
?>


