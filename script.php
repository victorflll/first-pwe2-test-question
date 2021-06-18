<?php
    if(isset($_REQUEST['try']) and ($_REQUEST['try'] == 'sent')) {
        session_start();

        $_SESSION['name'] = $_POST['name'];
        $_SESSION['phoneNumber'] = $_POST['phoneNumber'];

        echo "<a href='script2.php'>See your informations here</a>";
    } else {
        ?>
            <form method="POST" name="formavaliativo" action="script.php?try=sent">
                <div>
                    <label for="name">Nome: </label>
                    <input type="text" name="name"><br>
                </div>
                <div>
                    <label for="phoneNumber">Telefone: </label>
                    <input type="text" name="phoneNumber"><br>
                </div>
                <button type="submit" value="Send">Enviar</button>
            </form>
        <?php
    }
?>