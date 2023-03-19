 <?php
include('config.php'); 
session_start(); 
?>

 <html>
    <head>
        <style>
           .text-right {
            color: #f8f9fa;
            }
            body {
    background: rgb(99, 39, 120)
}


 


/* .back:hover {
    color: #682773;
    cursor: pointer
} */

.labels ,.d,.text-black-50 .d {
    font-size: 20px;
    color: #f8f9fa;
    
}


body{
    /* background: rgba(0,0,0,0.5) url('../photo/bg_2.jpg') no-repeat; */
    background-blend-mode: darken !important;   
    background: rgba(0,0,0,0.7) url('../imgs/main.jpg') no-repeat !important;
   opacity: 10px  !important;
}
.rounded{
    border: 2px solid white;
    border-radius: 10px;
}
/* .btn{
    background-color: #f8f9fa ;
    
} */
.btn.profile-button{
    color: #fff;
    background-color: #ff214f;
    border-color: #ff214f;
}
.btn.profile-button:hover{
    background-color: #ff214f;
    color: #fff;
}
.form-control{
    background-color: #495057 !important;
    /* background-clip: padding-box; */
    border: 1px solid #343a40 !important;
    border-radius: 0.2rem !important;
    color: white!important;
}
::placeholder{
    color: #fff !important  ;
}
.go_back{
    text-decoration: none;
    color:#fff;
}

        </style>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet">
    <link rel="stylesheet" >
    

    </head>
 <body>
    
 <div class="container rounded mt-5 mb-5" >
 <button class="btn profile-button ml-5 my-3" type="button"><a class="go_back" href="../../index.php#Home"> Go Back </a></button>
    
    <div class="row ">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold  d " ><?php echo "ID:".$_SESSION['id']; ?></span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <!-- <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div>
                </div> -->
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Username</label>
                        <input type="text" class="form-control" placeholder="username" value="<?php echo $_SESSION['username'];?>" readonly>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Name</label>
                        <input type="text" class="form-control" placeholder="name" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Mobile Number</label>
                        <input type="text" class="form-control" placeholder="enter phone number" value="">
                    </div>
                        <!-- <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div> -->
                        <!-- <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div> -->
                        <!-- <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div> -->
                        <!-- <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div> -->
                        <!-- <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div> -->
                    <div class="col-md-12">
                        <label class="labels">Email ID</label>
                        <input type="text" class="form-control" placeholder="enter email id" value="<?php echo $_SESSION['email'];?>"readonly>
                    </div>
                        <!-- <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div> -->
                </div>
                <!-- <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div> -->
                <div class="mt-5 text-center">
                    <button class="btn profile-button mr-5" type="button">Save Profile</button>
                    <button class="btn profile-button ml-5" type="button">Edit Profile</button>

                </div>
                
            </div>
        </div>
        <!-- <div class="col-md-4">
             <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div> -->
        <!-- </div> --> 
    <!-- </div> -->
</div>
</div>
</div>

 </body>
 </html>



