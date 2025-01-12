<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="initial-scale=1.0, width=device-width">
        <meta charset="utf-8">

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../style/style.CSS">
		<script src="https://cdn.tailwindcss.com"></script>
		<script src="../tailwind.config.js"></script>
    </head>

    <body>
    <div id="content">

        <?php

            $ayam = "ayam goreng";
$recipes = [
                [
                    'nama' => 'Tempoyak',
                    'link' => '.\tempoyak.html'
                ],

                [
                    'nama' => 'Nasi Goreng '.$ayam,
                    'link' => '.\nasi_goreng.html'
                ]
                ];

            
        ?>

<div class="w-full py-4">

    <a href="../index.html">
        <span class="p-4 rounded-lg hover:bg-slate-200">< Kembali ke utama.</span></a>
    
</div>

<div class="mt-4 mb-8">

    Jom belajar buat resepi2 ni:
    <ul class="list-disc">
        <?php foreach ($recipes as $recipe): ?>
            <li class="hover:underline">
                <a href=<?= $recipe['link'] ?>><?= $recipe['nama']?></a>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
            </div>
    </body>
</html>