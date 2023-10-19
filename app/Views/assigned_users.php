<?=$this->extend('layouts/main')?>
<?=$this->section('content')?>

<title> Przypisani Użytkownicy </title>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('login/logout') ?>">Wyloguj się <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('userpage') ?>">Powrót</a>
      </li>
    </ul>
    
  </div>
</nav>

<h2> Przypisani Użytkownicy </h2>

<?php if (isset($assigned_users) && !empty($assigned_users)) : ?>
    <ul>
        <?php foreach ($assigned_users as $user) : ?>
            <li>
                <a href="<?= base_url('userdetails/show/' . $user['UserID']) ?>"> 
                    <?= $user['FirstName'] ?> <?= $user['LastName'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else : ?>
    <p>Nie masz przypisanych użytkowników.</p>
<?php endif; ?>

<?= $this->endSection()?>
