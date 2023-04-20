<?php
if (isset($_SERVER['HTTP_ORIGIN'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['honeypot']) && empty($_POST['honeypot'])) {
            if (!preg_match('!^ *$!s', $_POST['nom'] && !preg_match('!^ *$!s', $_POST['prenom']) && !preg_match('!^ *$!s', $_POST['mail']) && !preg_match('!^ *$!s', $_POST['message']))) {
                session_start();
                $mail = strip_tags($_POST['mail']);
                $nom = strip_tags($_POST['nom']);
                $prenom = strip_tags($_POST['prenom']);
                $content = strip_tags($_POST['message']);

                if ($_POST['subject'] == 0 || $_POST['subject'] > 4) {
                    $_SESSION['error'] = "Vous n'avez pas choisi de sujet valide";
                    header('location: ../index.php#form');
                    exit;
                }

                switch ($_POST['subject']) {
                    case 1:
                        $subject = "Demande de devis";
                        break;
                    case 2:
                        $subject = "J'ai un projet web";
                        break;
                    case 3:
                        $subject = "Demande de renseignements";
                        break;
                    case 4:
                        $subject = "Autre demande";
                        break;
                }

                $to = "contact@mywebsoluce.fr";
                $from = "webmaster@mywebsoluce.fr";

                $message = "<p>Bonjour,</p>
                            <p>Vous avez reçu un nouveau message de la part de $nom $prenom</p>
                            <p>Voici le contenu du message :</p>
                            <p>$content</p>
                            <p>Vous pouvez répondre à $mail</p>";

                $headers = "from : $from" . "\r\n" .
                    'Reply-To: ' . $mail . "\r\n" .
                    'X-Mailer : PHP/' . phpversion() . "\r\n" .
                    "Content-Type: text/html; charset=UTF-8";

                mail($to, $subject, $message, $headers);

                $_SESSION['message'] = "Votre message a bien été envoyé. J'y répondrais dans les plus bref délais";
                header('Location: ../index.php#form');
            }
        }
    }
}
