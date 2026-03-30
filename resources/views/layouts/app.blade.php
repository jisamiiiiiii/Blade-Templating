<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Student Portal | Red & White</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
       
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        :root {
            --school-red: #da291c; 
            --school-yellow: #f5b91a; 
            --school-white: #ffffff;
            --main-bg: rgba(255, 255, 255, 0.7); 
        }

        body { 
            font-family: 'Inter', -apple-system, sans-serif; 
            background-image: url('https://umindanao.edu.ph/images/tour/AUbtn9q5.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .window { 
            display: flex;
            background: var(--main-bg); 
            backdrop-filter: blur(25px); 
            -webkit-backdrop-filter: blur(25px);
            width: 100%;
            max-width: 1200px;
            height: 80vh;
            border-radius: 20px; 
            box-shadow: 0 40px 80px rgba(0,0,0,0.2); 
            overflow: hidden;
            border: 1px solid rgba(255,255,255,0.4);
        }

        .main-content {
            flex: 1;
            background: rgba(255, 255, 255, 0.4); 
            padding: 60px;
            overflow-y: auto;
        }

        h1 { 
            font-weight: 700; 
            font-size: 32px; 
            letter-spacing: -1px;
            color: var(--school-red); 
            margin-bottom: 30px; 
            border-bottom: 2px solid rgba(218, 41, 28, 0.1); 
            padding-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="window">
        @include('partials.navbar') 

        <div class="main-content">
            <h1>University Student Portal</h1>
            @yield('content') 
        </div>
    </div>

</body>
</html>