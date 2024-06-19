<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scores - Summa Crafted</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aptos&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Aptos', sans-serif;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>

<body class="m-0 flex justify-center items-center h-screen bg-black font-bold">
    <div id="app" class="namen flex flex-col justify-center items-center w-4/5 h-4/5 pt-2">
        <div v-if="error" class="text-white text-3xl mb-4">{{ errorMessage }}</div>
        <div v-else class="flex justify-evenly items-stretch w-full">
            <div class="box border-2 border-blue-300 bg-gradient-to-b from-blue-100 to-blue-500 p-5 m-5 w-1/2 rounded-lg flex flex-col justify-center items-center grow-0 basis-72 text-center">
                <div class="text-container flex-1">
                    <h1 class="text-3xl leading-none text-shadow mb-2">{{ robots.Tommy.name }}</h1>
                    <h3 class="leading-none text-shadow">{{ robots.Tommy.score }} points</h3>
                </div>
                <div class="image-container flex-1 mt-8">
                    <img src="images/robot2.png" alt="robot2">
                </div>
            </div>
            <div class="box border-2 border-pink-400 bg-gradient-to-b from-pink-100 to-pink-400 p-5 m-5 w-1/2 rounded-lg flex flex-col justify-center items-center grow-0 basis-72 text-center">
                <div class="text-container flex-1">
                    <h1 class="text-3xl leading-none text-shadow mb-2">{{ robots.Joan.name }}</h1>
                    <h3 class="leading-none text-shadow">{{ robots.Joan.score }} points</h3>
                </div>
                <div class="image-container flex-1 mt-8">
                    <img src="images/robot3.png" alt="robot3">
                </div>
            </div>
        </div>
    </div>

    <div id="timer" class="text-4xl absolute mt-4 top-5 left-1/2 transform -translate-x-1/2 text-white">
        <h1 class="text-white font-bold text-3xl">ROBOT SCOREBOARD!</h1>
    </div>
    <script src="scores.js"></script>
</body>
</html>
