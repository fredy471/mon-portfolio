
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre premiere instruction : echo</title>
</head>
<body>
    <h2> <center>Enregistrement</center></h2>


            <pre>
                    <?php 
                        if( $_SERVER["REQUEST_METHOD"]="POST"){

                            if (isset($_POST["send"])){
                                $prenom=htmlspecialchars($_POST["firstname"]);
                                $nom=htmlspecialchars($_POST["lastname"]);
                                $email=htmlspecilchars($_POST["email"]);
                                $text=htmlspecialchars($_POST["text"]);
                                $tel=htmlspecialchars($_POST["tel"]);



                                echo  "<p>Nom : $nom</p>" . "\n";
                                echo "<p>Prenom : $prenom</p>" . "\n";
                                echo  "<p> Email : $email</p>" . "\n";
                                echo  "<p>Telephone : $tel</p>" . "\n";

                            }
                        }


                    ?>
            </pre>




    
</body>
</html>



