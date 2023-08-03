<?php 
include 'partials/header.php';
if (isset($_SESSION['user_id']) && isset($_SESSION['user_is_Volunteer'])) {
?>

<div class="container-fluid p-0 m-0 dashboard" id="dash">
    <div class="container sidebarleft p-0">
        <div class=" d-flex justify-content-around colsd p-0">
         
        <!-- <button class="btn px-4" id="togle"><i class="fas fa-bars"></i></button> -->
        </div>
        <div class="container-fluid" id="menu">
            <h5 class="text-secondary p-3">MENU</h5>
        <ul class="navigation">
            <li><button class="btn" id="overviewbtn"><i class="fas fa-th-large" id="actives1"></i> <span class="text-dark">OVERVIEW</span></button></li>
            <li><button class="btn" id="profilebtn"><i class="fas fa-user" id="actives2"></i> <span class="text-dark">MY PROFILE</span></button></li>
            <!-- <li><button class="btn" id="documentsbtn"><i class="fas fa-file-invoice" id="actives3"></i> <span class="text-dark">DOCUMENTS</span></button></li> -->
        <hr class="mx-3 mobile">
        
        </div>
        
    </div>
        <main>
          <div class="container-fluid p-0">
                <div class="container-fluid p-0 m-0 dashboard-loob">
                    <div class="header">
                        <h4>Dashboard</h4>
                        <a href="" class="btn start" >Join a Program</a>
                    </div>
                </div>
                <?php
                if (isset($_SESSION['user_id'])) {
                $id = filter_var($_SESSION['user_id'], FILTER_SANITIZE_NUMBER_INT);
                $query = "SELECT * FROM users WHERE id = $id";
                $result = mysqli_query($connection, $query);
                if ($result && mysqli_num_rows($result) === 1) {
                    $user_data = mysqli_fetch_assoc($result);
                    $username = isset($user_data['username']) ? $user_data['username'] : '';
                    $email = isset($user_data['email']) ? $user_data['email'] : '';
                ?>
                <div id="signs">
                    <div class="signout" >
                        <div class="signoutbox">
                            <img src="assets/media/user.png" alt="" class="imgLogo">
                            <div class="container-fluid cont">
                            <p class="par"><?php echo $user_data['username']; ?></p>
                            <p class="email"><?php echo $user_data['email']; ?></p>
                                <div class="container-fluid d-flex justify-content-center align-items-centern flex-column">
                                    <button class="btn btn-success">Manage your Account</button>
                                    
                                </div>
                            <div class="container-fluid d-flex justify-content-center pt-2 align-items-center">
                                <a href="<?=ROOT_URL?>logout.php" class="btn btn-danger py-1">Log Out</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
                <div id="overview">
                    <div class="top">
                        <ul class="events">
                    
                            <li><button class="btn" id="active">Active</button></li>
                            <li><button class="btn" id="ended">Ended</button></li>
                        </ul>
                    </div>
                    
                    <div class="contents">
                    
                        <div class="container-fluid event" id="activeEvents">
                            <div class="container-fluid pt-5 d-flex justify-content-center align-items-center h-100 p text-secondary">
                                No Active Events
                            </div>
                    
                        </div>
                        <div class="container-fluid event" id="endedEvents">
                            <div class="container-fluid pt-5 d-flex justify-content-center align-items-center h-100 p text-secondary">
                                No Ended Events
                            </div>
                        </div>
                        <form method="POST" action="startprogram-process.php" >
                        <div id="startEvents" class="startEvent">
                            <div class="back"><i class="fas fa-arrow-left"> Back</i></div>
                            <div class="titles">Volunter Program Information</div>
                            <div class="topContainer d-flex flex-column">
                                <div class="container-fluid d-flex flex-column">
                                    <div class="tags">Program Title</div>
                                    <input type="text" class="form-control ms-3" placeholder="Program Title">
                                </div>
                                <div class="container-fluid d-flex flex-column">
                                    <div class="tags">Program Category</div>
                                    <select name="" id="" class="form-control ms-3">
                                        <option value="Select Organization">Select Organization</option>
                                        <option value="Volunteer Training Programs">Volunteer Training Programs</option>
                                        <option value="Social And Civil Welfare Programs">Social And Civil Welfare Programs</option>
                                    
        
                                    </select>
                                    
                                </div>
                                <div class="container-fluid d-flex flex-column">
                                    <div class="tags">Organization Name</div>
                                    <input type="text" class="form-control ms-3" placeholder="Organizational Name">
                                </div>
                            </div>
                            <div class="secondContainer d-flex flex-column">
                                <div class="container-fluid d-flex flex-column">
                                    <div class="titles">Person In Charge</div>
                                    <div class="container d-flex gap-3">
                                        <div class="container-fluid">
                                            <p class="tags">First name</p>
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="container-fluid">
                                            <p class="tags">Last name</p>
                                            <input type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex flex-column">
                                    <div class="container d-flex gap-3">
                                        <div class="container-fluid">
                                            <p class="tags">Email</p>
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="container-fluid">
                                            <p class="tags">Contacts</p>
                                            <input type="number" class="form-control" placeholder="Contact Number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="thirdContainer d-flex flex-column">
                                <div class="titles">Program Details</div>
                                <div class="container-fluid">
                                    <p class="tags">Number of Volunteers Needed</p>
                                    <input type="number" class="form-control" placeholder="No. of Volunteers">
                                </div>
                                <div class="sched">
                                    <div class="container-fluid">
                                        <p class="tags">Program Schedule</p>
                                        <input type="date" name="" id="" class="form-control">
                                    </div>
                                    <div class="container-fluid">
                                        <p class="tags">Time</p>
                                        <div class="container-fluid d-flex gap-3">
                                            <input type="time" name="" id="" class="form-control">
                                            <p>to</p>
                                            <input type="time" name="" id="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <p class="tags">Location</p>
                                    <input type="text" name="" id="" class="form-control" placeholder="Location">
                                </div>
                                <div class="container-fluid">
                                    <p class="tags">How to get there?</p>
                                    <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Description"></textarea>
                                </div>
                                <div class="container-fluid">
                                    <p class="tags">Upload your program photo</p>
                                    <p style="font-size: 12px;">This Picture will shown to your program</p>
                                    <img src="" alt="" class="preview" id="prev">
                                    <input type="file" name="" id="file">
                                </div>
                            </div>
                            <div class="fourthContainer d-flex flex-column">
                                <div class="titles">Scope of the Program</div>
                                <p class="tags">Program Description</p>
                                <textarea name="" id="" cols="30" rows="10" class="fomr-control" placeholder="Description..."></textarea>
                            </div>
                            <div class="fifthContainer d-flex flex-column">
                                <div class="titles">Volunteer Requirements</div>
                                <div class="container-fluid d-flex gap-3">
                                    <div class="container-fluid">
                                        <p class="tags">Age Bracket</p>
                                        <input type="number" name="" id="" class="form-control" placeholder="Age Selected and Above">
                                    </div>
                                    <div class="container-fluid">
                                        <p class="tags">Skills and Qualifications</p>
                                        <input type="text" class="form-control" placeholder="Skills">
                                    </div>
                                </div>
                                <p class="tagsSmall">* If you desire alterations to your information, kindle reach out to  the Administrator, <a href="">Contact Us</a></p>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div id="profile">
                    <div class="container-fluid pt-3">
                        <div class="container-fluid d-flex justify-content-center align-items-center flex-column">
                            <img src="assets/media/user.png" alt="" class="img-fluid" style="width: 90px;" id="profileHolder" >
                            <input type="file" name="" id="profiles" >
                            <div class="container-fluid pb-5">
                            <div class="container-fluid d-flex gap-5 m-0 p-0">
                                <div class="container-fluid p-0">
                                    <p class="tags">First Name</p>
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="container-fluid p-0">
                                    <p class="tags">Last Name</p>
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                                <p class="tags">Email Address</p>
                                <input type="email" name="" id="" class="form-control" placeholder="Email">
                                <p class="tags">Contact Number</p>
                                <input type="number" name="" id="" class="form-control" placeholder="Contact No.">
                                <p class="tags">Complete Address</p>
                                <textarea name="" id="" cols="30" rows="10" placeholder="Address" class="form-control"></textarea>
                                <button type="button" class="btn ors" id="pass">Change Password?</button>
                                <br>
                                <a href="" class="btn btn-primary px-4">UPDATE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="documents" class="pt-5">
                <div class="container-fluid d-flex p-3">
                    <h4 class="text-primary"><i class="fas fa-inbox"></i> Primary</h4>
                </div>
                <div class="container-fluid p-0 d-flex flex-column">
                    <div class="container-fluid p-0 inbox">
                        <div class="container p-0 d-flex inbpxfirst">
                            <input type="checkbox" name="" id="">
                            <i class="fas fa-trash-alt"></i>
                            <p class="names">Volunteer Connect</p>
                        </div>
                        <div class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, quia. Molestias.</div>
                        <p class="ps"><strong>21 Jun</strong></p>
                    </div>
                </div>
                </div>

                <div id="passwords">
                <div class="container-fluid  d-flex justify-content-center align-items-center flex-column">
                    <div class="container">
                        <div class="back" ><i class="fas fa-arrow-left"> Back</i></div>
                    </div>
                    <div class="passwordBox">
                        <h2>Change your Password</h2>
                        <p class="text-secondary">Enter your password below to change your password</p>
                        <div class="container-fluid">
                            <p class="tags">Enter your current Password</p>
                            <input type="password" name="" id="" class="form-control" placeholder="Current Password">
                            <p class="tags">New Password</p>
                            <input type="password" name="" id="" class="form-control" placeholder="New Password">
                            <p class="tags">Confirm Password</p>
                            <input type="password" name="" id="" class="form-control" placeholder="Confirm Password">
                            <button class="form-control changeP back" >Change Password</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </main>
   </div>
   <script src="build/js/main1.js"></script>
    <script src="build/js/volunteer.js"></script>
    <?php }
   else {
    header('location: ' .ROOT_URL . 'index.php');
    die();
   }
   ?>