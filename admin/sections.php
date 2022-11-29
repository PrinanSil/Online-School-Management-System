<?php include("../includes/config.php") ?>
<?php include("header.php") ?>
<?php include("sidebar.php") ?>

<?php
    if(isset($_POST['submit'])){
        $title=$_POST['title'];
        mysqli_query($db_conn," INSERT INTO sections (title) VALUE ('$title')") or die('kakj');
    }
?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Sections</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Sections</li>              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
       <!-- Main content -->
    <section class="content">
        <div class="container-fluid">         
          <div class="row">
            <div class="col-lg-8">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title py-1">
                            Sections
                        </h3>
                        <div class="card-tools"></div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                             <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    <th>S.L. No.</th>
                                    <th>Title</th>
                                    <th>Action</th>                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($db_conn,'SELECT * FROM sections');  
                                    $count=1;                              
                                    while( $sections=mysqli_fetch_object($query)) { ?> 
                                        <tr>
                                            <td><?=$count++?></td>
                                            <td><?=$sections->title?></td>
                                            <td></td>                                           
                                        </tr>
                                    <?php } ?>
                                </tbody>                  
                            </table>                
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col-lg-4"> <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title py-1">
                            Add New Section
                        </h3>                        
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" placeholder="Title" required 
                                class="form-control">
                            </div>
                            
                            <button name="submit" class="btn btn-success float-right">Submit</button>                          
                        </form>
                    </div>
                </div> 
            </div>
          </div>         
        </div>
    <!-- /.info-box-content -->
    </section>
    <!-- /.content -->    
        
<?php include("footer.php") ?>