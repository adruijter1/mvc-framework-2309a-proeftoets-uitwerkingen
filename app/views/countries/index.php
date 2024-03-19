<?php require_once APPROOT . '/views/includes/header.php'; ?>

<h3><?= $data['title']; ?></h3>

<!-- Maak een nieuwe view aan voor deze link -->
<p><a href="<?= URLROOT; ?>/Countries/create">Nieuw land toevoegen</a></p>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Naam</th>
            <th>Hoofdstad</th>
            <th>Continent</th>
            <th>Aantal Inwoners</th>
        </tr>
    </thead>
    <tbody>
        <?= $data['dataRows']; ?>
    </tbody>
</table>

<br>
<a href="<?= URLROOT; ?>/homepages/index">Homepage</a>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>