<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title> 
  @vite(['resources/js/app.js', 'public/js/app.js', 'public/scss/style.scss'])
</head>
<body>
  <main>
    {{ $slot }}
  </main>
</body>
</html>