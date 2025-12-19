<head>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Nova Craft</title>
    <link rel="icon" href="./asset/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">



</head>

<nav class="fixed w-[100%] flex justify-between p-5 bg-purple-300/40 z-50 shadow-lg shadow-[#504f4f65]">
    <div class=" flex items-center w-[10%] ">
        <h1 class="text-purple-800"><strong>Nova Craft</strong></h1>
    </div>
    <div class="flex justify-between items-center w-[30%]">
        <a href="home"
            class="hover:shadow-lg hover:shadow-white hover:text-white hover:text-[20px] hover:bg-[#16b8d967] p-3 rounded-[20px]">Home</a>
        <a href="about"
            class="hover:shadow-lg hover:shadow-[#f9f9f9] hover:bg-[#16b8d967] hover:text-[20px] p-3 rounded-[20px] hover:text-white">About</a>
        <a href="service"
            class="hover:shadow-lg hover:shadow-white hover:text-[20px] hover:bg-[#16b8d967] p-3 rounded-[20px] hover:text-white">Services</a>
        <a href="contact"
            class="hover:shadow-lg hover:shadow-white hover:bg-[#16b8d967] hover:text-[20px] hover:text-white p-3 rounded-[20px]">Contact</a>
    </div>
    <div class="flex w-auto gap-2 justify-between ">
        <?php $situ = false ?>
        <?php if ($situ === false): ?>
            <button
                class="border-[3px] border-white p-2 w-[100px] h-[50px] rounded-[20px] bg-purple-600 text-white hover:bg-purple-800 hover:text-[20px]"><a
                    href="login">Login</a></button>
            <button
                class="border-[3px] border-white p-2 w-[100px] h-[50px] rounded-[20px] bg-purple-600 text-white hover:bg-purple-800 hover:text-[20px] "><a
                    href="signin">Sign in</a></button>
        <?php endif ?>
        <?php if ($situ === true): ?>

            <img src="./asset/persone.jpg" alt="profil" id="profil" class="w-[50px] h-[50px] rounded-[20px]">
            <div id="sidebar"></div>
        <?php endif ?>
    </div>

</nav>
<script>
    const profil = document.getElementById("profil");
    profil.addEventListener("click", (){
        const sidebar = document.getElementById("sidebar");
        sidebar.innerHTML = "<button class='border-[3px] border-white p-2 w-[100px] h-[50px] rounded-[20px] bg-purple-600 text-white hover:bg-purple-800'><i class='fa-solid fa-arrow-right-from-bracket'></i></button>"
    })
</script>