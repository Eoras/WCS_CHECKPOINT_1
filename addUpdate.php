<?php
include 'header.php';

$isUpdate = false;

if (!empty($_GET['id'])) {
    $isUpdate = true;
    $request = "SELECT author, chapter, content, date, image
                FROM citation
                WHERE id='" . $_GET['id']. "'";

    $result = mysqli_query($bdd_connect, $request);
    while($data = mysqli_fetch_assoc($result))  {
        $cleanPost['author'] = $data['author'];
        $cleanPost['chapter'] = $data['chapter'];
        $cleanPost['content'] = $data['content'];
        $cleanPost['image'] = $data['image'];
    }
}

if ($_POST) {

    foreach ($_POST as $key => $value) {
        $cleanPost[$key] = trim(mysqli_real_escape_string($bdd_connect, $value));
    }

    if (empty($_POST['author'])) {
        $errors[] = 'Nous devez renseigner un auteur';
    } elseif (strlen($_POST['author']) < 3) {
        $errors[] = 'L\'auteur doit contenir au minimum 3 caractères';
    }

    if (empty($_POST['chapter'])) {
        $errors[] = 'Vous devez renseigner un chapitre';
    }

    if (empty($_POST['content'])) {
    $errors[] = 'Nous devez renseigner une citation.';
    } elseif (strlen($_POST['content']) < 3) {
        $errors[] = 'La citation doit contenir au minimum 3 caractères';
    }

    if (empty($_POST['image'])) {
        $errors[] = 'Vous devez ajouer une image à votre article';
    }

    if (!empty($errors)) : ?>

        <div class="alert alert-danger center-block formquoter">
            <button type="button" class="close" data - dismiss="alert" aria - hidden="true">&times;</button>
            <strong>Erreur<?= count($errors) >=2 ? 's' : '' ?> !!!</strong>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <?php
    else :
        $author = $cleanPost['author'];
        $chapter = $cleanPost['chapter'];
        $content = $cleanPost['content'];
        $date = date('Y-m-d');
        $image = $cleanPost['image'];

        if (empty($cleanPost['id'])) :
            $request = "INSERT INTO citation (author, chapter, content, date, image) 
                      VALUES ('$author', '$chapter', '$content', '$date', '$image')";
        else :
            $id = $cleanPost['id'];
            $request = "UPDATE citation SET author='$author', chapter='$chapter', date='$date', image='$image'
                        WHERE id='$id'";
        endif;

        $result = mysqli_query($bdd_connect, $request);

        header("Location: index.php");
    endif;
}

?>

<form action="" method="post" class="center-block formquoter">

    <fieldset class="form-group">
        <legend>
            <?php
            if ($isUpdate) {
                echo 'Mise à jour de la citation de ' . ucfirst($cleanPost['author']);

            }  else {
                echo 'Ajouter une citation';
            }
            ?>
        </legend>
        <?php
        if ($isUpdate) : ?>

        <figure class="well text-center">
            <img src="<?= $cleanPost['image'] ?>" alt="<?= $cleanPost['author'] ?>">
        </figure>
        <?php endif; ?>

        <label for="author">Auteur:</label>
        <input type="text" class="form-control" name="author" id="author"
               placeholder="Entrez l'auteur de la citation" value="<?= $cleanPost['author'] ?? '' ?>"/>
        <label for="chapter">Chapitre:</label>
        <input type="text" class="form-control" name="chapter" id="chapter"
               placeholder="Entrez le chapitre de la citation" value="<?= $cleanPost['chapter'] ?? '' ?>"/>
        <label for="content">Citation:</label>
        <textarea type="text" class="form-control" name="content" id="content"
                  placeholder="Ecrivez la citation"><?= $cleanPost['content'] ?? '' ?></textarea>
        <label for="image">URL de l'image:</label>
        <input type="text" class="form-control" name="image" id="image"
               placeholder="Ecrivez la citation" value="<?= $cleanPost['image'] ?? '' ?>"/>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?? '' ?>" />
    </fieldset>

    <button type="submit" class="btn btn-<?= $isUpdate ? 'info' : 'success' ?> ">
        <span class="glyphicon glyphicon-<?= $isUpdate ? 'edit' : 'plus' ?>"></span> <?= $isUpdate ? 'Modifier' : 'Ajouter' ?>
    </button>
    <a href="index.php" class="btn btn-default pu"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>

</form>

<?php
include 'footer.php';
?>
