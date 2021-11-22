<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Weather App</title>

        <link rel="stylesheet" href="/css/app.css">
        <script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0" defer></script>
        <script src="https://rawgithub.com/darkskyapp/skycons/master/skycons.js" defer></script>
        <script src="/js/app.js" defer></script>
        

        
    </head>
    <body class="bg-blue-500">

    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
        <div id="app" class="flex justify-center pt-16">
            <weather-app></weather-app>
        </div>
        
    </body>
</html>