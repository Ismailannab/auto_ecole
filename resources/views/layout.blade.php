<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
 <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <ul class="navbar-nav">   
        <li class="nav-item"><a href="/condidats" class="nav-link">gestion des condida</a></li>
        <li class="nav-item"><a href="/moniteurs" class="nav-link">gestion des monteurs</a></li>
        <li class="nav-item"><a href="/vehicules " class="nav-link">gestion des Vehicules</a></li>
        <li class="nav-item"><a href="/permis" class="nav-link">permis</a></li>
        <li class="nav-item"><a href="/seances" class="nav-link">seance</a></li>
        <li class="nav-item"><a href="/exams" class="nav-link">exams</a></li>
        <li class="nav-item"><a href="/resultats" class="nav-link">resultats</a></li>
        <li class="nav-item"><a href="/payments" class="nav-link">payments</a></li>
</ul>
        
</nav>
<div class="container">
    @yield ('content')
</body>
</html>