<?=$this->extend('layouts/main')?>
<?=$this->section('content')?>

<title>Logowanie</title>
<div class="container">
    <h1> Logowanie </h1>
    <div class="form">
    <form method="post" action="<?= base_url('login/process') ?>">
            <div class="form-group">
                <label for="FirstName">Imię:</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
            <div class="form-group">
                <label for="LastName">Nazwisko:</label>
                <input type="password" class="form-control" id="lastname" name="lastname">
            </div>
            <button type="submit" class="btn btn-primary">Zaloguj się</button>
        </form>
    </div>
</div>



<?= $this->endSection()?>
