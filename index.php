<?php
include 'header.php';

?>

        <div class="kaamelott-banner jumbotron kaamelott-underline">
            <h1>C'EST PAS FAUX !</h1>
            <p>Les meilleurs citations de la serie-TV Kaamelott</p>
        </div>

<div class="row">

    <?php
    $request = "SELECT id, author, chapter, content, date, image
                FROM citation";
    $result = mysqli_query($bdd_connect, $request);

    while($data = mysqli_fetch_assoc($result)) : ?>

        <div class="col-sm-6 col-md-4">
            <figure class="thumbnail">
                <img src="<?= $data['image'] ?>" alt="<?= $data['author'] ?>">
                <figcaption class="caption">
                        <p>"<?= htmlentities($data['content']) ?>"</p>
                    <aside class="text-right"><?= ucfirst(htmlentities($data['author'])) . ', ' . ucfirst(htmlentities($data['chapter'])) ?></aside>
                </figcaption>
                <form action="delete.php" method="post" class="text-right editdelet">
                    <a href="addUpdate.php?id=<?= $data['id'] ?>" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-edit"></span> Modifier</a>
                    <input type="hidden" name="id" value="<?= $data['id'] ?>"/>
                    <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                </form>
            </figure>
        </div>

    <?php endwhile;?>

</div>

<?php
include 'footer.php';
?>
