<head>
    <link rel="stylesheet" href="../src/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<?php
// mysqli_connect();


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
if (empty($_POST['name']) || empty($_POST['age']) || empty($_POST['email'])) {
    echo "<p id='message' class ='absolute top-1/4 bg-[#f889515f] text-[#d54e06] border-[10px] rounded-[40px] p-[10px] text-[20px]'>Remplire tout la formule <i class='fa-solid fa-triangle-exclamation'></i></p>";
    return;

} else {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];



    // Vérifier l'âge
    if ($age >= 100 || $age <= 0) {
        echo " <p id='message' class ='absolute top-1/4 bg-[#f889515f] text-[#650f00] border-[10px] rounded-[40px] p-[10px] text-[20px]'>Entrer un vrai age <i class='fa-regular fa-face-angry'></i></p>
            ";
        return;
    }
    // Vérifier l'âge
    if ($age <= 18) {
        echo "<p id='message' class ='absolute top-1/4 bg-[#f889515f] text-[#650f00] border-[10px] rounded-[40px] p-[10px] text-[20px]'>Votre age doit étre plus que 18 ans <i class='fa-regular fa-face-smile'></i></p>";
        return;
    }

    // Validation email avec regex
    $regex = "/^[\w.-]+@[\w.-]+\.(fr|com|org)$/";
    $r = preg_match($regex, $email);

    if ($r === 0) {
        echo "<p id='message' class ='absolute top-1/4 bg-[#f889515f] text-[#650f00] border-[10px] rounded-[40px] p-[10px] text-[20px]'>respecter cette écriture \"exemple@gmail.com\" </p>";
        return;
    }


    echo "<p id='message' class ='absolute top-1/4 bg-[#f2b3f45f] text-[#017552] border-[10px] rounded-[40px] p-[10px] text-[20px]'>La formule a ete bien remplie <i class='fa-regular fa-face-smile-beam'></i></p>";

    echo "<p id='message' class ='absolute h-auto w-[300px] top-1/2 bg-[#fed6ff5f] text-[#0c015d] border-[10px] rounded-[40px] p-[10px] text-[20px]'><strong>Bonjour </strong>".$name."<br> <strong>Votre message :  </strong>".$msg."<strong> a ete bien envoyer</strong> <i class='fa-regular fa-face-smile-beam'></i></p>";
    exit;
}
}
?>