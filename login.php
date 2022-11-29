<?php include("header.php") ?>
    <section class="bg-light vh-100 d-flex">
        <div class="col-3 m-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border rounded-circle mx-auto d-flex mb-3" style="width:100px; height:100px">
                        <i class="fa fa-user text-primary fa-3x m-auto"></i>
                    </div>   
                <form action="actions/login.php" method="POST">
                    <div class="form-floating mb-3">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Test">
                        <label class="form-label" for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Test">
                        <label class="form-label" for="password">Password</label>
                    </div>
                    <div class="text-center"><button class="btn btn-primary" name="login">Login</button></div>
                </form>    
                </div>
            </div>
        </div>
    </section>
 
<?php include("footer.php") ?>