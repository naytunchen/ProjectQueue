<?php include 'Database.php';?>
<?php
    $query = "SELECT * FROM users";
    $results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
    $total = $results->num_rows;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Project Queue</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
    <body align="center">
        <header>
            <div class="container">
                <h1>Sign Up</h1>
            </div>
        </header>
        <main>
            <div class="container" align="left">
                <!--<h2>Testing Query</h2>
                <ul>
                    <?php while($row = $results->fetch_assoc()): ?>
                        <li>id: <?php echo $row['id'];?><br/> password: <?php
                        echo $row['pw'];?></li>
                    <?php endwhile; ?>
                </ul>-->
                <form method="post" action="process.php">
                    <div class="u_pw">Username: </div> <input type="text"
                    class="signup_textbox" placeholder="username / email">

                    <div class="u_pw">Password: </div> <input type="text"
                    class="signup_textbox" placeholder="password">

                    <div class="u_pw">Confirm Password: </div> <input
                    type="text" class="signup_textbox" placeholder="confirm password">

                     <br>  <input name="submit" type="submit" value="Submit testing2"/> 
                </form>
            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &copy; 2015, Project Queue
            </div>
        </footer>
    </body>
</html>
