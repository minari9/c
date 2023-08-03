<?php
include 'partials/header.php';
if (isset($_SESSION['user_id']) && isset($_SESSION['user_is_Organization'])) {
?>

<div class="container-fluid p-0 m-0 dashboard" id="dash">
        <div class="container-fluid p-0">
            <div class="container sidebarleft p-0">
                <div class="container-fluid d-flex justify-content-around colsd p-0">
                <!-- <button class="btn px-4" id="togle"><i class="fas fa-bars"></i></button> -->
                </div>
                <div class="container-fluid" id="menu">
                    <h5 class="text-secondary p-3">MENU</h5>
                    
                <ul class="navigation">
                    <li><button class="btn" id="overviewbtn"><i class="fas fa-th-large" id="actives1"></i> <span class="text-dark">OVERVIEW</span></button></li>
                    <li><button class="btn" id="profilebtn"><i class="fas fa-user" id="actives2"></i> <span class="text-dark">MY PROFILE</span></button></li>
                    <li><button class="btn" id="documentsbtn"><i class="fas fa-file-invoice" id="actives3"></i> <span class="text-dark">DOCUMENTS</span></button></li>
                </ul>
                </div>
                
            </div>
            <main>
                <div class="container-fluid p-0">
                    <div class="container-fluid p-0 m-0 dashboard-loob">
                        <div class="header">
                           <h4>Dashboard</h4>          
                           <button href="<?=ROOT_URL?>StartProgram.php" class="start" id="start">Start a Program</button>
                        </div>
                    </div>
                    <div id="signs">
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
                        <div class="signout" >
                            <div class="signoutbox">
                                <img src="assets/media/org2.png" alt="" class="imgLogo">
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
                        <div class="container top p-0">
                            <ul class="events">
                                <li><button class="btn" id="upcoming">Upcoming</button></li>
                                <li><button class="btn" id="active">Active</button></li>
                                <li><button class="btn" id="ended">Ended</button></li>
                            </ul>
                        </div>
                        
                        <div class="contents">
                            <div class="container-fluid event p-0" id="upcomingEvents">
                               <div class="container-fluid grids">
                                <div class="box">
                                    <img src="assets/media/fire.jpg" alt="" class="img-fluid rounded-3">
                                    <div class="time">
                                        <span class="badge bg-warning p-2">For Approval</span>
                                        <i class="far fa-clock"> 08/23</i>
                                    </div>
                                    <div class="title">
                                        Volunteer FireFighter Training
                                    </div>
                               </div>
                               </div>
                            </div>
                            <div class="container-fluid event p-0" id="activeEvents">
                                <div class="container-fluid pt-5 d-flex justify-content-center align-items-center h-100 p text-secondary">
                                    No Active Events
                                </div>
                            </div>
                            <div class="container-fluid event p-0" id="endedEvents">
                                <div class="container-fluid p-0 d-flex justify-content-center align-items-center h-100 p text-secondary">
                                    No Ended Events
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="profile">
                        <div class="container-fluid pt-3">
                            <div class="container-fluid d-flex justify-content-center align-items-center flex-column">
                                <img src="assets/media/org2.png" alt="" class="img-fluid" style="width: 90px;" id="profileHolder" >
                                <input type="file" name="" id="profiles" >
                                <div class="container-fluid pb-5">
                                    <p class="tags">Organization Name</p>
                                    <input type="text" class="form-control" placeholder="Organization Name">
                                    <p class="tags">Email Address</p>
                                    <input type="email" name="" id="" class="form-control" placeholder="Email">
                                    <p class="tags">Contact Number</p>
                                    <input type="number" name="" id="" class="form-control" placeholder="Contact No.">
                                    <p class="tags">Complete Address</p>
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Address" class="form-control"></textarea>
                                    <p class="tags"></p>
                                   
                                    <button type="button" class="btn ors" id="pass">Change Password?</button>
                                    <br>
                                    <a href="" class="btn btn-primary px-4">UPDATE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="documents">
                        <div class="container-fluid pt-3">
                            <div class="container-fluid p-0">
                                <h4 class="docu">Documents</h4>
                                <p class="green">Requirements</p>
                                <p>Attach Documents <br> All Requirements with <span class="ors">*</span> are required</p>
                            </div>
                            <div class="docs">
                                <div class="buttons border d-flex flex-column gap-3">
                                    <div class="container-fluid p-0 m-0 d-flex p-2 docs" id="brgy">
                                        <div class="greens"></div>
                                        <div class="datas d-flex flex-column" >
                                            <div class="container-fluid">Upload a copy of your <strong>Organization Barangay Clearance</strong></div>
                                            <div class="container-fluid"><i>Note:</i> This document serves as proof of your organization's compliance with the barangay regulations and enables us to validate your activities within the community</div>
                                        </div>
                                    </div>
                                    <div class="container-fluid p-0 m-0 d-flex p-2 docs" id="pcnc">
                                        <div class="greens"></div>
                                        <div class="datas d-flex flex-column">
                                            <div class="container-fluid">Upload a copy of your <strong>Certification from the Philippine Council for NGO (PCNC)</strong></div>
                                            <div class="container-fluid"><i>Note:</i> This by obtaining this certification, NGOs demonstrate their compliance with legal and ethical standards, ensuring the public's trust in their operations.</div>
                                        </div>
                                    </div>
                                    <div class="container-fluid p-0 m-0 d-flex p-2 docs" id="bir">
                                        <div class="greens"></div>
                                        <div class="datas d-flex flex-column">
                                            <div class="container-fluid">Upload a copy of your <strong>Certification from the Bereau of the internal Revenue (BIR)</strong></div>
                                            <div class="container-fluid"><i>Note:</i> By obtaining this certification, demonstrates that the organization has met its tax obligations and is in good standing with the BIR.</div>
                                        </div>
                                    </div>
                                    <div class="container-fluid d-flex justify-content-evenly gap-1">
                                        <div class="d-flex gap-1 align-items-center sizes"><div style="border-radius: 0;" id="greens1"></div> APPROVED</div>
                                        <div class="d-flex gap-1 align-items-center sizes"><div style="border-radius: 0;" id="reds"></div>RESUBMIT</div>
                                        <div class="d-flex gap-1 align-items-center sizes"><div style="border-radius: 0;" id="blues"></div>UPLOADED</div>
                                        <div class="d-flex gap-1 align-items-center sizes"><div style="border-radius: 0;" id="yellows"></div>DRAFT</div>
                                     </div>
                                </div>
                                <div class="imges">
                                    <div id="one" class="container-fluid p-3">
                                        <input type="file" name="" id="brgyfile" class="form-control">
                                       <div class="container-fluid d-flex justify-content-center align-items-center pt-3">
                                        <img src="" alt="" id="brgyprev" class="img-fluid">
                                       </div>
                                        <!-- <img src="assets/media/picture5.png" alt="" class="img-fluid"> -->
                                    </div>
                                    <div id="two" class="cotainer-fluid p-3">
                                        <input type="file" name="" id="pcncfile" class="form-control">
                                        <div class="container-fluid d-flex justify-content-center align-items-center pt-3">
                                            <img src="" alt="" id="pcncprev" class="img-fluid">
                                           </div>
                                    </div>
                                    <div id="three" class="container-fluid p-3">
                                        <input type="file" name="" id="birfile" class="form-control">
                                        <div class="container-fluid d-flex justify-content-center align-items-center pt-3">
                                            <img src="" alt="" id="birprev" class="img-fluid">
                                           </div>
                                    </div>
                                </div>
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
       
   </div>
   <script src="build/js/main1.js"></script>
    <script src="build/js/volunteer.js"></script>
   <?php }
   else {
    header('location: ' .ROOT_URL . 'index.php');
    die();
   }
   ?>
