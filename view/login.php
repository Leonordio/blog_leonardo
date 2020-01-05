<body>

          <?php include 'modules/header.php'; ?>

          <!-- Content -->


          <div class="mt-5 d-flex justify-content-center align-items-center" style="height: 75vh;">

                    <div class="card">
                              <div class="card-body">
                                        <h5 class="card-title">Effettua l'accesso</h5>
                                        <p class="card-text">Inserisci negli appositi campi la tua email e la tua password di accesso</p>
                                        <form action="login.php" method="POST">
                                                  <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="admin@ped.academy" placeholder="banana@musaceae.com" required>
                                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                  </div>
                                                  <div class="form-group">
                                                            <label for="exampleInputPassword1">Password</label>
                                                            <input name="password" type="password" class="form-control" value="admin" id="exampleInputPassword1" placeholder="password" required>
                                                  </div>
                                                  <button name="login" value="login" type="submit" action="" class="btn btn-primary col-12">Login</button>
                                        </form>
                              </div>
                    </div>
          </div>

          <footer>
                    <? //***** 
                    ?>
          </footer>

</body>

</html>