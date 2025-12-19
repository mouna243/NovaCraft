<head>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

</head>
<div class=" h-auto flex flex-col items-center justify-center p-10 gap-7 ">
    <h1 class="text-[50px] mt-[100px] ">Notre sevices</h1>
    <?php
    $jsonData = file_get_contents("../data/service.json");
    $data = json_decode($jsonData, true);

    if (!$data) {
        include "./views/404.php";
        exit;
    } else {
        echo "<script>console.log('data')</script>";
    }


    ?>
    <?php 
     foreach ($data as $element): ?>
        <div
            class="border-l-[5px] border-b-[1px] border-r-[1px] border-t-[1px] border-blue-400 rounded-[10px] p-4 h-auto w-[90%]">
         
            <h2 ><i class="<?= $element['icon'] ?>  p-[18px] text-[30px]"></i><strong><?= $element['title'] ?></strong></h2>
            <p><?= $element['description'] ?></p>
        </div>

    <?php endforeach; ?>

</div>


