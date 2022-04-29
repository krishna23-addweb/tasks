<html>
    <body>
        <form method="get">
            <input type="text" name="username"/>
            <input type="submit" name="submit">
</form>
</body>
</html>

<?php
if(!isset($_GET['submit'])){
   $username = $_GET['username'] ?? 'not passed';
   print($username);
   print("<br/>");
}

?>