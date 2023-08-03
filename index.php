<?php
include 'partials/header.php'
?>
<!-- Home Page Pic -->
    <section class="Home_pic" >
        <div class="contents">
            <img src="./media/Picture1.png">
            <h1>Transforming Lives through Compassion</h1>
            <a href="<?=ROOT_URL?>StartProgram.php"><button>Start a Program </button></a>
        </div>
    </section>

    <!-- CONTENTS   -->
   <section class="feature">
    <div class="container">
    <h1>VOLUNTEER CONNECT FEATURED VOLUNTEER EVENTS</h1>
    <p>Whether you're passionate about environmental conservation, social justice, education, or any other cause close to your heart, we are here to connect you with meaningful volunteer opportunities that align with your interests and skills.</p>

    <div class="compare" id="How">
        <div class="contents">
            <h1>Collaboration 
                to other platforms</h1><p>See the advantages of partnerships that can bring mutual benefits and open up new avenues for growth, innovation, and community building</p><button class="connect-b">CONNECT</button>
            <h2>And</h2>
            <img src="./media/logo1.png" style="width: auto; height: 60px;">
            <div class="org">
                <img src="./media/org1.png" style="width: auto; height: 80px;">
                <img src="./media/org2.png" style="width: auto; height: 80px;">
                <img src="./media/org3.png" style="width: auto; height: 80px;">
            </div>
    
        </div>

    </div>
   
            </div>

    <div class="card-container">
        <div class="Programs" id="Programs">
            <div class="card" onclick="showProgramDetails(<?php echo $row['id']; ?>)">
                <img src="<?php echo $row['program_image']; ?>" class="pic2" alt="..." style="width:400px; height: 590px;">
                <h1><?php echo $row['Program']; ?></h1>
                <div class="card-body">
                    <h2><?php echo $row['Program']; ?></h2>
                    <p><?php echo $row['orgName']; ?></p>
                    <img src="./media/location.png" style="width: auto; height: 33px;">
                    <p><?php echo $row['date']; ?></p>
                    <img src="./media/calendar.png" style="width: auto; height: 33px;">
                    <p><?php echo $row['date']; ?></p>
                    <img src="./media/clock.png" style="width: auto; height: 33px;">
                    <p><?php echo $row['firstName']; ?></p>
                    <img src="./media/group.png" style="width: auto; height: 35px;">
                    <div class="container-bar">
                        <div class="progress-container">
                            <div class="progress-bar">
                                <div class="progress" style="width: <?php echo $progressPercentage; ?>%"><?php echo $currentResponses . '/' . $response_limit; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

    <!-- FOOTER IN THE HOME PAGE -->

   
    <section class="Discover">
        <div class="contents">
            <button> Discover Programs</button>
            <img src="./media/Picture3.png" >
        </div>
    </section>
    <!-- border in mobile -->
   <img src="./media/border.png" alt="" id="border12">
   <img src="./media/border.png" alt="" id="border13"> 
   <img src="./media/border.png" alt="" id="border14">


<?php
include 'partials/footer.php'
?>


<script src="./java/app.js"></script>
<script src="./java/app1.js"></script>
<script>
      let subMenu1 = document.getElementById("subMenu1");

function toggleMenu1(){
  subMenu1.classList.toggle("open-menu1");
}


</script>
<script>
let register = document.getElementById("register");

function toggleMenu2(){
  register.classList.toggle("open-menu2");
}
</script>
<script>
let volunteer = document.getElementById("volunteer1");
    
function toggleMenu3(){
  volunteer.classList.toggle("open-menu3");
  organization.classList.remove("open-menu4");
  register.classList.remove("open-menu2");
}
function remove1(){
    volunteer.classList.toggle("open-menu3");
}
</script>
<script>
    let organization = document.getElementById("organization1");
        
    function toggleMenu4(){
      organization.classList.toggle("open-menu4");
      volunteer.classList.remove("open-menu3");
      register.classList.remove("open-menu2");
    
    }
    function remove2(){
    organization.classList.toggle("open-menu4");
}
 
    </script>
   
 <!-- js code -->

 

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>