<?=$this->extend('layouts/main')?>
<?=$this->section('content')?>

<title>Profil Użytkownika</title>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   
</nav>



<body>
    <?php if (!empty($user)): ?>
        <h1>Informacje na temat użytkownika</h1>
        <pre>
            <?php var_dump($user); ?>
        </pre>
    <?php else: ?>
        <p>Nie znaleziono użytkownika</p>
    <?php endif; ?>
</body>
<?= $this->endSection()?>