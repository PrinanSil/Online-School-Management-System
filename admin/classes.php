<?php include("../includes/config.php") ?>
<?php include("header.php") ?>
<?php include("sidebar.php") ?>

<?php
    if(isset($_POST['submit'])){
        $title=$_POST['title'];
        $section= implode(',',$_POST['section']);
        $added_date=date('Y-m-d');
        mysqli_query($db_conn," INSERT INTO classes (title,section,added_date) VALUE ('$title','$section','$added_date')") or die('kakj');
    }
?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Classes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Classes</li>              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
       <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <?php

            if(isset($_REQUEST['action'])) { ?>
                <!-- Info boxes -->
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title py-1">
                            Add New Class
                        </h3>                        
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" placeholder="Title" required 
                                class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title">Section</label>
                                <?php
                                $query = mysqli_query($db_conn,'SELECT * FROM sections');  
                                $count=1;                              
                               while( $sections=mysqli_fetch_object($query)) { ?>
                                   <div>
                                    <label for="<?=$count?>">
                                            <input type="checkbox" id="<?=$count?>" name="section[]" value=" <?=$sections->ID?>" placeholder="Section" >
                                            <?=$sections->title?>
                                    </label>     
                                   </div>                           
                                <?php
                                $count++;
                            } ?>
                            </div>  
                            <button name="submit" class="btn btn-success">Submit</button>                          
                        </form>
                    </div>
                </div>   
                <!-- /.col -->
            <?php }else{ ?>
        <!-- Info boxes -->
         <div class="card ">
            <div class="card-header">
                <h3 class="card-title py-1">
                    Classes
                </h3>
                <div class="card-tools">
                    <a href="?action=add-new" class="btn btn-success btn-xs">
                        <i class="fa fa-plus mr-2"></i>Add New</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive ">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>S.L. No.</th>
                        <th>Name</th>
                        <th>Section(s)</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                                    <?php
                                    $class_query = mysqli_query($db_conn,'SELECT * FROM classes');  
                                    $count=1;                              
                                    while( $class=mysqli_fetch_object($class_query)) { ?> 
                                        <tr>
                                            <td><?=$count++?></td>
                                            <td><?=$class->title?></td>
                                            <td>
                                                <?php
                                                $sections = explode(',',$class->section);
                                                foreach($sections as $section){
                                                    $sec_query=mysqli_query($db_conn,'SELECT * FROM sections WHERE ID='.$section.'');
                                                    $sec= mysqli_fetch_object($sec_query);
                                                    echo $sec->title .'<br>';
                                                }
                                                ?>
                                            </td>  
                                            <td></td>                                         
                                        </tr>
                                    <?php } ?>
                                </tbody>                          
                </table>                
                </div>
            </div>
         </div>   
        <!-- /.col -->
        <?php } ?>
        </div>
    <!-- /.info-box-content -->
    </section>
    <!-- /.content -->    
        
<?php include("footer.php") ?>