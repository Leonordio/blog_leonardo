<?php
if (!empty($_GET['tag'])) {
        $posts = getAllPostsByTag($_GET['tag']);
}

include 'view/index.php'; ?>