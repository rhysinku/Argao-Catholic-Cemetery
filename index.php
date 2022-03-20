<?php
session_start();
if (isset($_SESSION['userID']))
{
    if($_SESSION['userID'] == 1)
    {
        include_once 'assets/headerfooter/adminHeader.php';
    }
    else{
        include_once 'assets/headerfooter/userHeader.php';
    }
}
else{
    include_once 'assets/headerfooter/Header.php';
}

?>



<body>
    <div class="d-flex justify-content-center" style="color: var(--bs-indigo);height: 474px;margin: 20px;"><iframe allowfullscreen="" frameborder="0" src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%" height="400" style="padding: 24px;"></iframe></div>
    <div style="margin: 26px;">
        <h1 class="text-center">Argao Catholic Cemetery</h1>
        <p class="fw-normal text-center" style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor&nbsp;<br>incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp;<br>nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;<br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore&nbsp;<br>eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,&nbsp;<br>sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>



<?php
session_start();
if (isset($_SESSION['userID']))
{
    if($_SESSION['userID'] == 1)
    {
        include_once 'assets/headerfooter/adminFooter.php';
    }
    else{
        include_once 'assets/headerfooter/Footer.php';
    }
}
else{
    include_once 'assets/headerfooter/Footer.php';
}

?>
