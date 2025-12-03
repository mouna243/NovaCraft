
<head>
    <link rel="stylesheet" href="./src/output.css">
</head>

<div class=" h-[120vh] flex items-center justify-center " >
    <form action="" method="POST" class="h-[90vh] w-[30%] border border-l-4  border-black rounded-[30px] flex flex-col justify-center items-center justify-self-center gap-3 p-8 ">

    <h1 class="text-black text-[30px]">Contacte</h1>
        <label for="name">Nom</label>
        <input class="border-b-2 border-[black] w-[300px] rounded-[10px] p-2 focus: outline-none" type="text" placeholder="Votre nom" name="name" id="name" required>
        <label for="age">Age</label>
        <input class="border-b-2 rounded-[10px] p-2 w-[300px] border-black focus: outline-none"  type="number" placeholder="Votre age" name="age" id="age" required>
        <label for="email">Email</label>
        <input class="border-b-2 rounded-[10px] p-2 w-[300px] border-black focus: outline-none"type="email" placeholder="Votre e-mail" name="email" id="email" required>
        <label for="msg">message</label>
        <textarea class="border-b-2 rounded-[10px] border-black p-2 h-[100px] w-[300px] focus: outline-none"  name="msg" id="msg" placeholder="entre votre message  "></textarea>
        <button type="submit" class="bg-[#c890f9] p-3 border-[black] rounded-[10px] hover:bg-purple-200 ">Envoyer</button>

    </form>


</div>

</html>

<?php

if (isset($_POST['name']) || isset($_POST['age']) || isset($_POST['email'])) {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    // Vérifier l'âge
    if ($age <= 18) {
        echo "<script>alert('Entrer un age plus que 18 ans');</script>";
        return;
    }

    // Validation email avec regex
    $regex = "/^[\w.-]+@[\w.-]+\.(fr|com|org)$/";
    $r = preg_match($regex, $email);

    if ($r === 0) {
        echo "<script>document.getElementById('email').style.border='red';
</script>";
        return;
    }
        echo "<script>alert('la formule a ete bien remplie (^-^)');</script>";

    echo "<strong>Bienvenue </strong>" . $name . "<br><strong> Votre email est : </strong>" . $email;
}
?>