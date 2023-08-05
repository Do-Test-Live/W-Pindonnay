<?php
session_start();
if (isset($_SESSION['lan'])){
    unset($_SESSION['lan']);
    session_destroy();
}

$lan = $_GET['lan'];

if($lan == 'CN'){
    session_start();
    $_SESSION['lan'] = 'CN';
    echo "<script>
window.location.href = 'index.php';
</script>";
} elseif ($lan == 'FR'){
    session_start();
    $_SESSION['lan'] = 'FR';
    echo "<script>
window.location.href = 'index.php';
</script>";
} elseif ($lan == 'EN'){
    session_start();
    $_SESSION['lan'] = 'EN';
    echo "<script>
window.location.href = 'index.php';
</script>";
} else{
    session_start();
    $_SESSION['lan'] = 'CN';
    echo "<script>
window.location.href = 'index.php';
</script>";
}
