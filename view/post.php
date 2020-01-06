<body>

    <?php include 'modules/header.php'; ?>

    <!-- Content -->
    
    <div class="mt-5 d-flex justify-content-center align-items-center" style="height: 75vh;">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Crea un nuovo post</h5>
                <p class="card-text">Scrivi il tuo post, dagli un titolo e tagga i tuoi contenuti</p>
                <form action="post.php" method="POST">
                    <div class="form-group">
                        <label>Titolo: </label><br>
                        <input class="form-control form-control-lg" type="text" name="title" id="inputTitle" placeholder="Title" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Scrivi qui il tuo post:</label><br>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="5" placeholder="..." required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tag:</label><br>
                        <input class="form-control form-control-sm" type="text" name="tag" id="inputTag" placeholder="tag_1, tag_2, tag_3, ... tag_n">
                    </div>

                    <button type="submit" class="btn btn-primary col-12">Crea</button>
                </form>
            </div>


        </div>
    </div>


</body>

</html>