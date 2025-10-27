<?php require 'partials/header.php'; ?>

<h2><?= $pageTitle ?></h2>

<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos inventore tempore magni dolorum corporis cum amet, quisquam sunt iste ea, dicta hic commodi beatae! Blanditiis vero reprehenderit ab laudantium vel.</p>


<?php empty($result) && redirect('/404'); ?>

 <h3>Tous les messages de la page  :</h3>

<?php foreach ($result as $contact): ?>
    <article>
        <p><strong>Nom:</strong> <?= $contact['nom'] ?></p>
        <p><strong>titre:</strong> <?= $contact['titre'] ?></p>
        <p><strong>message:</strong> <?= $contact['message'] ?></p>
    </article>
<?php endforeach; ?>


<!-- <?//php if ($nom && $titre && $message): ?>
    <article>
        <h3>Votre message :</h3>
        <p><strong>Nom:</strong> <?//= $nom ?></p>
        <p><strong>titre:</strong> <//= $titre ?></p>
        <p><strong>message:</strong> <?//= $message ?></p>
    </article>
<?//php endif ?> -->

<form action="" method="post">
    <!-- <form action="" method="post" novalidate> -->
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" value="<?= $nom ? $nom : '' ?>" required>
    <label for="titre">Titre</label>
    <input type="text" name="titre" id="titre" value="<?= $titre ? $titre : '' ?>" required>
    <label for="messaage">Messaage</label>
    <textarea name="message" id="message" required><?= $message ? $message : '' ?></textarea>
    <input type="submit" value="Envoyer">
</form>

<?php require 'partials/footer.php'; ?>