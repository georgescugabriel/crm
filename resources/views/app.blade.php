<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Asociatia de Sprijin a Copiilor cu Autism Barcuta ofera servicii pentru copiii cu autism si familiile acestora cu scopul de a le creste calitatea vietii si a mijloci integrarea acestora in diversele medii sociale.">
        <meta name="keywords" content="autism, autismawareness, autismacceptance, asd, adhd, specialneeds, autistic, autismmom, autismfamily, autismo, autismlove, memes, autismlife, autismspectrum, autismsupport, aspergers,
        disability, downsyndrome, autismspeaks, autismspectrumdisorder, autismparents, dankmemes, meme, love, mentalhealth, actuallyautistic, neurodiversity, anxiety, inclusion, specialeducation, autismdad, differentnotless,
        dank, autismcommunity, autismadvocate, sensoryprocessingdisorder, edgymemes, autismparent, aba, edgy, speechtherapy, education, autisme, cerebralpalsy, autismrocks, funny, cringe,
        parenting, autismjourney, neurodivergent, cancer, autismworld, therapy, disabilityawareness, depression, mentalhealthawareness, autismawarenessmonth, occupationaltherapy, lmao, dyslexia">
        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
