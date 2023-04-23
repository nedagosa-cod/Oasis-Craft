<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/styles/css/styles.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="./public/js/parallax.js" defer></script>

    <title>Oasis Craft</title>
</head>
<body>
    <header id="header">
        <?php
            include 'public/components/navbar.php'
        ?>
    </header>
        <section class="parallax">
            <figure class="parallax__layer parallax__layer--bg" id="background">
                <img src="./public/img/parallax/lax_1.png" alt="parallax">
            </figure>
            <figure class="parallax__layer parallax__layer--mountains" id="mountains">
                <img src="./public/img/parallax/lax_2.png" alt="parallax">
            </figure>
            <figure class="parallax__layer parallax__layer--lava" id="lava">
                <img src="./public/img/parallax/lax_3.png" alt="parallax">
            </figure>
            <figure class="parallax__layer parallax__layer--floor" id="floor">
                <img src="./public/img/parallax/lax_4.png" alt="parallax">
            </figure>
            <figure class="parallax__layer parallax__layer--tower" id="tower">
                <img src="./public/img/parallax/lax_5.png" alt="parallax">
            </figure>
            <figure class="parallax__layer parallax__layer--rock" id="rock">
                <img src="./public/img/parallax/lax_6.png" alt="parallax">
            </figure>
            <figure class="parallax__layer parallax__layer--minirock" id="minirock">
                <img src="./public/img/parallax/lax_7.png" alt="parallax">
            </figure>
        </section>
    <main class="main">
        <section class="videobx">
            <img class="videobx__video" src="./public/video/parallax/scene_a/scene (1).jpg" alt="scene" id="video">
            <div class="videobx__text">
                <h1>Oasis Craft MMORPG</h1>
                <p>¡Bienvenidos a Oasis Craft, un servidor de Minecraft único en su tipo! En este servidor, podrás sumergirte en un mundo de aventuras y rol, donde la diversión y la emoción nunca terminan. Ya sea que estés interesado en montar dragones, adquirir trabajos, explorar mazmorras o simplemente disfrutar de una experiencia MMORPG única en su tipo, Oasis Craft tiene algo para todos.</p>
                <p>Aquí, encontrarás equipos y herramientas completamente diferentes a las del Minecraft vanilla, lo que significa que tendrás que adaptarte y explorar nuevas estrategias para lograr el éxito. Además, podrás seguir una historia única de tu personaje a medida que avanzas por el mundo de Oasis Craft, descubriendo secretos y desbloqueando nuevos elementos a medida que avanzas.</p>
                <p>Pero lo mejor de todo es que Oasis Craft no es solo un juego, sino una experiencia social. Aquí, podrás interactuar con otros jugadores y formar amistades duraderas a medida que trabajas juntos para lograr tus objetivos. Así que si estás buscando una experiencia de Minecraft emocionante y única, no busques más que Oasis Craft. ¡Te esperamos en el mundo virtual! </p>
            </div>
            <figure id="vidLogo">
                <img src="./public/img/logo.png" alt="logo">
            </figure>
        </section>
        <section class="bigscene">
            <figure class="bigscene__layers bigscene__layers--starts" id="starts">
                <img class="bigscene__video" src="./public/img/parallax/lax_8.png" alt="parallax">
            </figure>
            <figure class="bigscene__layers bigscene__layers--oasis" id="starts">
                <img class="bigscene__video" src="./public/img/parallax/oasis.png" alt="parallax">
            </figure>
            <figure class="bigscene__layers bigscene__layers--craft" id="starts">
                <img class="bigscene__video" src="./public/img/parallax/craft.png" alt="parallax">
            </figure>
        </section>
        <section class="swordscene">
            <img class="swordscene__video" src="./public/video/parallax/scene_b/scene (0).jpg" alt="scene" id="video_b">
        </section>
        <section class="proto">

        </section>
    </main>
</body>
</html>