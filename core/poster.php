<?php


//Funzione che prende i post dall'array associativo rappresentato in JSON post.json
function getAllPosts()
{
        $postname = __DIR__ . DIRECTORY_SEPARATOR . 'post.json';
        //_DIR_ si usa per richiamare la stessa cartella in cui si trova il file, DIRECTORY_SEPARATOR è uno slash universale.
        $rawData = file_get_contents($postname);
        $posts = json_decode($rawData, true);
        return $posts;
}

//Funzione per scrivere un post dato il titolo, il contenuto e i tag come argomenti.
function writePostToFile($title, $content, $tag)
{
        $posts = getAllPosts();
        $posts[] = [
                "title" => $title,
                "content" => $content,
                "tag" => $tag
        ];

        $posts = json_encode($posts, JSON_PRETTY_PRINT);
        $postname = __DIR__ . DIRECTORY_SEPARATOR . 'post.json';
        file_put_contents($postname, $posts,);
}

//Funzione per filtrare la visualizzazione dei post su index in base al tag selezionato in GET.
function getAllPostsByTag($filtertag)
{
        $posts = getAllPosts();
        foreach ($posts as $post) {
                foreach ($post['tag'] as $singletag) {
                        if ($singletag == $filtertag) {
                                $filterPostsByTag[] = $post;
                        }
                }
        }
        $posts = $filterPostsByTag;
        return $posts;
}

/*function removePost($removeId)
{
        $posts = getAllPosts();
        for ($i = 0; $i < (count($posts)-1); $i++) {
                if ($posts[$i]['title'] == $removeId) {
                        echo $removeId;
                        unset($posts[$i]);
                }
        }
}*/


function removePost($removeId)
{
        $posts = getAllPosts();
        foreach ($posts as $index => $post) {
                if ($post['title'] == $removeId) {
                        echo $removeId;
                        unset($posts[$index]);
                }
        }

        $posts = json_encode($posts, JSON_PRETTY_PRINT);
        $postname = __DIR__ . DIRECTORY_SEPARATOR . 'post.json';
        file_put_contents($postname, $posts,);
}


//Funzione per filtrare la visualizzazione dei post su index in base al titolo selezionato in GET.
/*function getAllPostsById($filterId)
{
        $posts = getAllPosts();
        foreach ($posts as $post) {
                        if ($post['title'] == $filterId) {
                                $filterPostsById[] = $post;
                        }
        }
        $posts = $filterPostsById;
        return $posts;
       
}*/


$posts = getAllPosts();
