  <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>


                            <div class="modal-body">
                                <div class="mt-5 d-flex justify-content-center align-items-center" style="height: 75vh;">



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
                            <div class="modal-footer">
                                ---



                            </div>
                        </div>
                    </div>
                </div>