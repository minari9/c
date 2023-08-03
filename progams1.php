<?php
include 'partials/header.php';

$sql = 'SELECT * FROM programs';
$all_programs = mysqli_query($connection, $sql);
?>

<head>
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style-program2.css">
</head>
   
<div class="title">
    <h2>VOLUNTEER TRAINING PROGRAMS</h2>
</div>

<section class="Allcards">
<?php while ($post = mysqli_fetch_assoc($all_programs)) : ?>
    <div class="Programs" id="Programs">
            <div class="card">
                <img src="./program-image/<?= $post['program_image']; ?>" class="pic2" alt="..." style="width: 400px; height: 590px;">
                <h1><?php echo $post['Program']; ?></h1>
                <div class="card-body">
                    <h2><?php echo $post['Program']; ?></h2>
                    <p><?php echo $post['orgName']; ?></p>
                    <img src="./media/location.png" style="width: auto; height: 33px;">
                    <p><?php echo $post['date']; ?></p>
                    <img src="./media/calendar.png" style="width: auto; height: 33px;">
                    <p><?php echo $post['time']. '-' . $post['time1']; ?></p>
                    <img src="./media/clock.png" style="width: auto; height: 33px;">
                    <p><?php echo $post['firstName'] . ' ' . $post['lastName']; ?></p>
                    <img src="./media/group.png" style="width: auto; height: 35px;">
                    <div class="container-bar">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: <?php echo $progressPercentage; ?>%"><?php echo $currentResponses . '/' . $post['response_limit']; ?></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <?php endwhile ?>
</section>

<?php include 'partials/footer.php' ?>


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
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
 <script>
        
    const container = document.getElementById('container');
    const overlayCon = document.getElementById('overlayCon');
    const overlayBtn = document.getElementById('overlayBtn');

overlayBtn.addEventListener('click', () => {
container.classList.toggle('right-panel-active');
});

</script>
<script>
        
    const container1 = document.getElementById('container1');
    const overlayCon1 = document.getElementById('overlayCon1');
    const overlayBtn1 = document.getElementById('overlayBtn1');

overlayBtn1.addEventListener('click', () => {
container1.classList.toggle('right-panel-active');
});

</script>
<script>
    const togglePassword = document.getElementById('togglePassword');
const passwordInput = document.getElementById('password');

togglePassword.addEventListener('click', function () {
const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
passwordInput.setAttribute('type', type);
this.classList.toggle('fa-eye-slash');
});

const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
const confirmPasswordInput = document.getElementById('confirmPassword');

toggleConfirmPassword.addEventListener('click', function () {
const type = confirmPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
confirmPasswordInput.setAttribute('type', type);
this.classList.toggle('fa-eye-slash');
});



</script>
<script>
    
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>