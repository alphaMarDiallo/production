<?php
require_once "inc/header.inc.php";
?>
<div class="row">
    <div class="card col-md-3 mb-2 p-0">
        <h5 class="card-header">Titre</h5>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="blogArticle.php?action=art" class="btn btn-primary btn-block">Lire</a>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3 offset-10 mb-2">
        <a href="blogArticle.php?action=articles" class="btn btn-info">Plus d'articles</a>
    </div>
</div>

<?php
require_once "inc/footer.inc.php";
?>