<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Alpha Growth Plan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        .day-tag {
            background: #764ba2;
            color: white;
            padding: 2px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            text-transform: uppercase;
            font-weight: bold;
        }
    </style>
</head>
<body class="p-4 md:p-8">

    <div class="max-w-6xl mx-auto">
        <header class="text-center mb-12 animate__animated animate__fadeInDown">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-2">🚀 My 2026 Split</h1>
            <p class="text-indigo-100 text-lg">Maximum Neural Drive & mTOR Activation</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <div class="glass-card p-6 animate__animated animate__bounceInLeft">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-gray-800">Upper A</h2>
                    <span class="day-tag">Sunday</span>
                </div>
                <ul class="space-y-4 text-gray-600">
                    <li class="flex items-center">💪 <span class="ml-2"><strong>Bench Press</strong> </li>
                    <li class="flex items-center">🧗 <span class="ml-2"><strong>Weighted Pullups</strong> </li>
                    <li class="flex items-center">⚡ <span class="ml-2"><strong>Lying Tricep Extension</strong> </li>
                    <li class="flex items-center">👐 <span class="ml-2"><strong>Lateral Raises</strong> </li>
                    <li class="flex items-center">🔥 <span class="ml-2"><strong>Bicep Curls</strong> </li>
                </ul>
            </div>

            <div class="glass-card p-6 animate__animated animate__bounceInRight" style="animation-delay: 0.2s">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-gray-800">Lower A</h2>
                    <span class="day-tag">Monday</span>
                </div>
                <ul class="space-y-4 text-gray-600">
                    <li class="flex items-center">🏋️ <span class="ml-2"><strong>Barbell Squat</strong> </li>
                    <li class="flex items-center">🍑 <span class="ml-2"><strong>RDL (Romanian Deadlift)</strong> </li>
                    <li class="flex items-center">🚜 <span class="ml-2"><strong>Leg Press</strong> </li>
                    <li class="flex items-center">🦵 <span class="ml-2"><strong>Seated Leg Curl</strong> </li>
                </ul>
            </div>

            <div class="glass-card p-6 animate__animated animate__bounceInLeft" style="animation-delay: 0.4s">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-gray-800">Upper B</h2>
                    <span class="day-tag">Wednesday</span>
                </div>
                <ul class="space-y-4 text-gray-600">
                    <li class="flex items-center">🏛️ <span class="ml-2"><strong>Bench Press / OHP</strong> </li>
                    <li class="flex items-center">🚣 <span class="ml-2"><strong>Barbell Bent Over Row</strong> </li>
                    <li class="flex items-center">⚡ <span class="ml-2"><strong>Lying Tricep Extension</strong> </li>
                    <li class="flex items-center">👐 <span class="ml-2"><strong>Lateral Raises</strong> </li>
                    <li class="flex items-center">🔥 <span class="ml-2"><strong>Bicep Curls</strong> </li>
                </ul>
            </div>

            <div class="glass-card p-6 animate__animated animate__bounceInRight" style="animation-delay: 0.6s">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-gray-800">Lower B</h2>
                    <span class="day-tag">Thursday</span>
                </div>
                <ul class="space-y-4 text-gray-600">
                    <li class="flex items-center">💀 <span class="ml-2"><strong>Deadlift</strong> </li>
                    <li class="flex items-center">🏋️ <span class="ml-2"><strong>Barbell Squat (Light)</strong> </li>
                    <li class="flex items-center">🦵 <span class="ml-2"><strong>Leg Extensions</strong> </li>
                    <li class="flex items-center">🍗 <span class="ml-2"><strong>Seated Leg Curl</strong> </li>
                </ul>
            </div>

        </div>

        <footer class="mt-12 text-center text-indigo-100 animate__animated animate__fadeIn">
            <p>Don't forget: Neural Warm-up before starting! 🧠✨</p>
            <p class="text-xs mt-2">Rest Days: Tuesday, Friday, Saturday</p>
        </footer>
    </div>

</body>
</html>