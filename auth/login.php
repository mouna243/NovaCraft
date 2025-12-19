
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Nova Craft</title>
    <link rel="icon" href="../assetes/logo.png">
<link rel="stylesheet" href="../src/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  
</head>

<body>

<img src="./asset/bg.gif" alt="bg" class="absolute  w-full h-full z-1">
<div class="relative h-[100vh] flex items-center justify-center z-40">
    <form action="" method="POST"
        class="h-auto w-[30%] bg-[#c186f8a2] border border-l-4  border-[#c471f8] rounded-[30px] flex flex-col justify-center items-center justify-self-center gap-3 p-8 ">

        <h1 class="text-[#480080] text-[40px] ">Login</h1>
        <label for="name" class="text-[#e9d2fb]">Nom</label>
        <input class="border-b-2 border-[#c471f8] w-[300px] rounded-[10px] p-2 focus:outline-none bg-[#fff0] focus:bg-[#fff0]" type="text"
            placeholder="Votre User name" name="name" id="name">
        <label for="msg" class="text-[#e9d2fb]">Passworde</label>
        <input type="password" placeholder="enter le mot de pass"
            class="border-b-2 rounded-[10px] p-2 w-[300px] border-[#c471f8] focus:outline-none  focus:bg-[#fff0] bg-[#fff0] value:text-white" >
        <button type="submit"
            class="bg-[#c890f9] p-3 border-[black] rounded-[10px] hover:bg-purple-200 ">Login</button>
            <a href="signin">Sign in ?</a>

    </form>
</div>
</body>
</html>