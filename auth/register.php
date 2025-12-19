<head>
    <title>Nova Craft</title>
    <link rel="icon" href="../assetes/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  
</head>

<img src="../asset/signein.gif" alt="bg" class="absolute w-full h-full z-1">
<div class="relative h-[100vh] flex items-center justify-center z-40">

    <form action="" method="POST"
        class="h-auto w-[30%] bg-[#0f057d] border border-l-4  border-[#6970fa] rounded-[30px] flex flex-col justify-center items-center justify-self-center gap-3 p-8 ">

        <h1 class="text-[#e9d2fb] text-[40px] ">Sign in</h1>
        <label for="name" class="text-[#e9d2fb]">Nom</label>
        <input class="border-b-2 border-[#719af8] w-[300px] rounded-[10px] p-2 focus:outline-none bg-[#fff0] focus:bg-[#fff0] text-[white]" type="text"
            placeholder="Votre User name" name="name" id="name">
        <label for="email" class="text-[#e9d2fb]">Email</label>
        <input class="border-b-2 rounded-[10px] p-2 w-[300px] border-[#719af8] focus:outline-none focus:bg-[#fff0] bg-[#fff0] text-[white]" type="text"
            placeholder="Votre e-mail" name="email" id="email">
        <label for="msg" class="text-[#e9d2fb]">message</label>
        <input type="password" placeholder="enter le mot de pass"
            class="border-b-2 rounded-[10px] p-2 w-[300px] border-[#719af8] text-[white] focus:outline-none  focus:bg-[#fff0] bg-[#fff0]">
        <button type="submit"
            class="bg-[#6277ff] p-3 border-[black] rounded-[10px] hover:bg-blue-200 ">Sign in</button>  

    </form>
</div>

</html>
