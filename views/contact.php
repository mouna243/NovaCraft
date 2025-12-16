<head>
    <link rel="stylesheet" href="./src/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<div class="h-[130vh] flex items-center justify-center">
    <form action="" method="POST"
        class="h-[90vh] w-[30%] border border-l-4  border-black rounded-[30px] flex flex-col justify-center items-center justify-self-center gap-3 p-8 ">

        <h1 class="text-black text-[30px]">Contact</h1>
        <label for="name">Nom</label>
        <input class="border-b-2 border-[black] w-[300px] rounded-[10px] p-2 focus:outline-none" type="text"
            placeholder="Votre nom" name="name" id="name">
        <label for="age">Age</label>
        <input class="border-b-2 rounded-[10px] p-2 w-[300px] border-black focus:outline-none" type="number"
            placeholder="Votre age" name="age" id="age">
        <label for="email">Email</label>
        <input class="border-b-2 rounded-[10px] p-2 w-[300px] border-black focus:outline-none" type="text"
            placeholder="Votre e-mail" name="email" id="email">
        <label for="msg">message</label>
        <textarea class="border-b-2 rounded-[10px] border-black p-2 h-[100px] w-[300px] focus:outline-none" name="msg"
            id="msg" placeholder="entre votre message "></textarea>
        <button type="submit"
            class="bg-[#c890f9] p-3 border-[black] rounded-[10px] hover:bg-purple-200 ">Envoyer</button>


        <script>
            setTimeout(function () {
                const m = document.querySelector("#message")
                if (m) {
                    m.style.display = 'none'
                }
            }, 2000)
        </script>

    </form>
</div>

</html>
<?php

include "views/contactphp.php";

?>