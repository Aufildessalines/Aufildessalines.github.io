<?php
if(isset($_POST["S'inscrire"])){
    $email = $_POST["mailing"];

    if(!empty($email) and strlen($email)>8){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
       
            require_once "conf.php";

            // vérifier si mail pax existant base donnees
            $rows= $pdo->prepare("SELECT * FROM members WHERE email=?");
            $rows->execute(array($email));

            $count = $rows->rowCount();

            if($count == true){
                $erreur="<span class="erreur"><i class="fas fa-exclamation-circle"></i> Email déjà existant</span><br>";
            }else{
                $time = time ();

                $req = $pdo->prepare("INSERT INTO members(email, date_time) VALUES(?,?)");
                $req->execute(array($email,$time));

                $header="MIME-version: 1.0 \e\n";
                    $header.="FROM:"Aufildessalines.github.io"<dentelle.rivegauche.newsletter@gmail.com>"."\n";
                    $header.="Content-Type:text/html; charsert="utf-8"."\n";
                    $header.="content-Transfer-Encoding: 8bit";

                    $message="<html>
                    <body style="background-color:#F98BE9">
                    <h1 style="color:#000000";>Merci pour votre inscription à ma newsletter! </h1>
                    <br>
                    <p>En vous souhaitant une agréable journée!<br>
                    Au fil des salines</p>
                    </body>
                    </html>;
                        mail($email, "Inscription à la newsletter (aufildessalines.github.io)", $message, $header);

                    $success="<span class="success"><i class="fas fa-check-circle"></i> Inscription validée! </span><br>";

                    unset($email);

            }            
        }else{
            $erreur="<span class="erreur"><i class="fas fa-exclamation-circle"></i> Veuillir saisir un email valide</span><br>";
        }

    }else{
        $erreur="<span class="erreur"><i class="fas fa-exclamation-circle"></i> Veuillir saisir votre adresse email complète</span><br>";
    }
}