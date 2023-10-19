<?=$this->extend('layouts/main')?>
<?=$this->section('content')?>
<title> Strona użytkownika </title>
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
        <a class="nav-link" href="<?= base_url('userpage/rulespage') ?>">Zasady</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('userpage/assigned_users') ?>">Przypisani użytkownicy</a>
      </li>
    </ul>
    
  </div>
</nav>

<h2> Użytkownik </h2>


<p>Imię: <?= session('user_firstname') ?></p>
<p>Nazwisko: <?= session('user_lastname') ?></p>
<p>Typ użytkownika: <?= session('user_type') ?></p>

<?= $this->endSection()?>
