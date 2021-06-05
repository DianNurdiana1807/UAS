
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">My Profile</h1>

                    <div class="row">
                    <div class="col-lg-8">
                    <div class="card mb-3" style="max-width : 540px;">
                    <div class="row g-0">
                    <div class="col-md-4">
                    
                  <img class="img-profile rounded-circle" src="../upload/<?= $_SESSION['image'];?>" alt="<?= $_SESSION['fullname'];?>"  width="200px" height="250px">
                  </div>
                 
                  <div class="col-md-8">
                  
                  <ul class="card-body">
                    <li class="list-group-item">
                    <h4><?= $_SESSION['username'];?></h4>
                    </li>
                    <li class="list-group-item"><?= $_SESSION['fullname'];?></li>
                   
                  </ul>
                  
                  </div>
                      

                      </div>
                      </div>
                    </div>
                </div>
                

                </div>
                
                
                


