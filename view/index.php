<body>
    <?php include 'modules/header.php'; ?>
    <?php require_once 'core/poster.php'; ?>


    <!-- Content -->
    <div>
        <div class="container">
            <div class="mb-3 col-md-12">

                <!-- Il titolo compare a seconda del tag in GET -->
                <div class="row header mt-4 ml-3">
                    <?php if (isset($_GET['tag'])) { ?>
                        <h2><strong>Ultimi post con tag: <?= $_GET['tag']; ?></strong></h2>
                    <?php } else { ?>
                        <h2><strong>Ultimi post</strong></h2>
                    <?php } ?>
                </div>


                <!-- All'interno di questo div scriviamo i post prelevati da $post. -->
                <div class="row mr-3 ml-3">
                    <?php foreach ($posts as $post) { ?>

                        <h3 class="mt-3">
                            <!-- Per ogni post genero anche un bottone "elimina" per cancellare il post inserito dal file JSON. -->
                           <?php if (isLogged()) {?>
                            <a class="btn btn-danger my-2 p-0 mr-3" role="button" href="index.php?title=<?php echo $post['title'] ?>"> x </span></a>
                           <?php } ?>
                            <?php echo $post['title'] ?>
                        </h3>

                        <p><?php echo $post['content'] ?></p>
                        <footer style="margin-top: -10px;">


                            <!-- Per ogni tag contenuto nel Json relativo ad ogni singolo post, stampa i primi seguiti da una virgola e l'ultima seguito da nessun carattere. -->
                            <en>Tags:</en>
                            <?php foreach ($post['tag'] as $ix => $tag) { ?>
                                <?php
                                $delimiter = $ix < (count($post['tag']) - 1) ? ', ' : '';
                                ?>
                                <a href="index.php?tag=<?php echo $tag ?>"> <span style="color: #FFA500"><?php echo $tag ?></span></a><?php echo $delimiter ?>
                            <?php } ?>



                        <?php } ?>
                        </footer>
                </div>
            </div>
        </div>


        <footer>
            <? //***** 
            ?>
        </footer>
</body>