<?php include_once 'temp/header.php'; ?>
<?php include_once 'temp/nav.php'; ?>


<?php
          include_once 'db_con.php';
          $conn = connect();
          $userid = $_SESSION['user_id'];

          $sql = "SELECT * FROM member WHERE id= '$userid'";
          $users = $conn -> query ($sql);

          $serial = 1;
          
      ?>
<div class="container">
    <div class="main-body">
    
         
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>John Doe</h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                      <!-- <button class="btn btn-primary">Follow</button> 
                      <button class="btn btn-warning">Message</button>-->
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Github</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary">@bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                 <?php
                                    foreach ($users as $user){
                                ?>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $user['First_name']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $user['Email']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $user['Phone']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $user['Phone']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Birthday</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $user['Birthday']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
      <?php
          include_once 'db_con.php';
          $conn = connect();
          $uid = $_SESSION['user_id'];

          $sql = "SELECT * FROM service WHERE user_id= '$uid'";
          $services = $conn -> query ($sql);

          $sql1 = "SELECT * FROM rickshaw WHERE user_id= '$uid'";
          $services1 = $conn -> query ($sql1);

          $sql2 = "SELECT * FROM house WHERE user_id= '$uid'";
          $services2 = $conn -> query ($sql2);

          $sql3 = "SELECT * FROM trade WHERE user_id= '$uid'";
          $services3 = $conn -> query ($sql3);
          
          $serial = 1;
          
      ?>
              <div class="row gutters-sm">
                <div class="col-sm-12 mb-6">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      

                      <div class="card-body text-center">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                               
                                
                                <th>SL</th>
                                <th>APPLICATION TYPE</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                                
                                 
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($services as $service){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                        <td><?= $service['service_name']?></td>
                                        <td> <?php 
                                            if ($service['is_approved'] == '1') {
                                                echo "Approved";
                                            } elseif ($service['is_approved'] == '0') {
                                                echo "Declined";
                                            } elseif ($service['is_approved'] == "") {
                                                echo "Pending";
                                            } 
                                        ?></td>
                                        
                                          <?php 
                                          if ($service['is_approved'] =='1'){ 
                                            ?>
                                            
                                          <td>
                                          <a  href="view_form.php?appid=<?=$service['id']?>" class="btn btn-info btn-sm">
                                                <i class="fa fa-edit"></i>View
                                            </a>

                                          </td>
                                        <?php }?>

                                    </tr>
                                <?php } ?>

                                <?php
                                    foreach ($services1 as $service1){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                        <td><?= $service1['service_type']?></td>
                                        <td> <?php 
                                            if ($service1['is_approved'] == '1') {
                                                echo "Approved";
                                            } elseif ($service1['is_approved'] == '0') {
                                                echo "Declined";
                                            } elseif ($service1['is_approved'] == "") {
                                                echo "Pending";
                                            } 
                                        ?></td>

                                        <?php 
                                          if ($service1['is_approved'] =='1'){ 
                                            ?>
                                        <td><a  href="view_rickshaw_form.php?appid=<?=$service1['id']?>" class="btn btn-info btn-sm">
                                                <i class="fa fa-edit"></i>View
                                            </a></td>
                                            <?php }?>

                                    </tr>
                                <?php } ?>

                                 <?php
                                    foreach ($services2 as $service2){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                        <td><?= $service2['type']?></td>
                                        <td> <?php 
                                            if ($service2['is_approved'] == '1') {
                                                echo "Approved";
                                            } elseif ($service2['is_approved'] == '0') {
                                                echo "Declined";
                                            } elseif ($service2['is_approved'] == "") {
                                                echo "Pending";
                                            } 
                                        ?></td>

                                        <?php 
                                          if ($service2['is_approved'] =='1'){ 
                                            ?>
                                        <td><a  href="view_house_permission.php?appid=<?=$service2['id']?>" class="btn btn-info btn-sm">
                                                <i class="fa fa-edit"></i>View
                                            </a></td>
                                            <?php } ?>
                                    </tr>
                                <?php } ?>

                                <?php
                                    foreach ($services3 as $service3){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                        <td><?= $service3['type']?></td>
                                        <td> <?php 
                                            if ($service3['is_approved'] == '1') {
                                                echo "Approved";
                                            } elseif ($service3['is_approved'] == '0') {
                                                echo "Declined";
                                            } elseif ($service3['is_approved'] == "") {
                                                echo "Pending";
                                            } 
                                        ?></td>

                                         <?php 
                                          if ($service3['is_approved'] =='1'){ 
                                            ?>
                                        <td><a  href="view_trade_license.php?appid=<?=$service3['id']?>" class="btn btn-info btn-sm">
                                                <i class="fa fa-edit"></i>View
                                            </a></td>
                                            <?php } ?>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>



            </div>
          </div>

        </div>
    </div>
    <?php include_once 'temp/footer.php'; ?>