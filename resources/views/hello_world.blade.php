<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #0f0f0f;
            font-family: 'Georgia', serif;
            overflow: hidden;
            position: relative;
        }
        
        .container {
            text-align: center;
            padding: 2rem;
            background-color: rgba(20, 20, 20, 0.7);
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            position: relative;
            z-index: 2;
            max-width: 80%;
            backdrop-filter: blur(5px);
        }
        
        h1 {
            font-size: 4rem;
            margin: 0;
            color: #e6e6e6;
            letter-spacing: 2px;
            font-weight: 400;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }
        
        p {
            color: #b3b3b3;
            font-size: 1.2rem;
            margin-top: 1rem;
            font-style: italic;
        }
        
        .accent {
            color: #c0392b;
        }
        
        .background-gradient {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at center, #1a1a1a 0%, #000000 100%);
            z-index: 1;
        }
        
        .glow {
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(circle at center, rgba(192, 57, 43, 0.2) 0%, transparent 70%);
            z-index: 1;
            filter: blur(30px);
            animation: float 8s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translate(-50%, -50%) scale(1); }
            50% { transform: translate(-50%, -50%) scale(1.2); }
        }
        
        .glow:nth-child(1) {
            top: 30%;
            left: 30%;
        }
        
        .glow:nth-child(2) {
            top: 70%;
            left: 70%;
            width: 200px;
            height: 200px;
            animation-delay: -4s;
        }
    </style>
</head>
<body>
    <div class="background-gradient"></div>
    <div class="glow"></div>
    <div class="glow"></div>
    
    <div class="container">
        <h1>Hello <span class="accent">World</span></h1>
        <p>With Great Power Comes Great Responsibility</p>
    </div>
</body>
</html>
