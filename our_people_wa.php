<?php
        include_once 'include/header.php';
        include_once 'config.php';
error_reporting(0);
?>
 
 
  <style>
 
    .ourpeople_banner{
      background-color:#0A4C89;
    }
    .our_people_title{
      color:white;
      font-family:'Bitter'
    }
 
#control1{
  left: 6px !important;
 
}
 
.carousel-control-next, .carousel-control-prev {
 
 
  top: -94px !important;
}
    .team-member {
      text-align: center;
      margin-bottom: 30px;
    }
 
    .team-member img {
      width: 45%;
      height: auto;
    }
 
    .team-member h4 {
        font-size: 25px;
        margin-top: 5%;
        font-family: "bitter";
    }
 
    .team-member p {
     
      font-family: "bitter";
    }
 
    .ourpeople{
 
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-right: 0%;
        padding-top: 3% !important;
        padding-bottom: 3% !important;
        max-width: 1434px !important;
    }
 
    .rounded-circle12{
        width: 77vh;
    height: 51vh;
    padding: 1%;
 
    }
    .ourpeople2{
 
        display: flex !important;
    flex-direction: row;
    align-items: center !important;
    justify-content: center !important;
    }
 
    .header_2{
 
        padding-left: 3% !important;
        margin-top: 7%;
        background-color: #0A4C89;
 
     
    }
 
    .display-4{
 
        font-family: Bitter;
        font-size: 6.5rem !important;
        font-weight: 700 !important;
     
    }
    .btnapply{
 
        background-color: #0A4C89;
        color: white;
        width: 16%;
    }
 
    .while{
 
      /* height: 14vh;
      background-color: #0A4C89;
      margin-bottom: 53vh; */
     
    }
 
    .btnapply {
    background-color: #0A4C89 !important;
    color: white !important;
    width: 16%;
    font-family: 'Nunito';
}
    .team_members{
 
    height: 10vh;
    margin-top: 1vh;
    font-weight: 700;
    font-family: Bitter;
    font-size: 45px;
    }
 
    .imgescenter{
 
      margin-top: 15%;
    }
 
    .imge12{
/*
      width: 140vh;
    margin-left: 7%; */
    }
 
    .inimge{
      border-radius: 10px;
    }
/*
    .imge_i{
      position: absolute;
    top: 101%;
    left: 13%;
    } */
 
    .control1{
 
      right: -199px !important;
}
.display-4 {
  font-family: Bitter;
        font-size: 6.5rem !important;
        font-weight: 500;
        float: left;
}
.carousel-control-next{
 
  right: -102px !important;
  font-size: 56px;
}
 
.carousel-control-prev {
    left: -116px !important;
    font-size: 56px;
}
 
.sumbityour{
 
 
  font-weight: 600;
  font-family: Bitter;
   font-size: 45px;
}
 
.lead {
    font-size: 2.00rem !important;
    font-weight: 300;
    float: left;
}
 
.carousel-control-prev, .carousel-control-next {
      color: #EB7217;
    }
 
 
    @media (max-width: 1024px) {
 
    .imge_i{
 
/* position: absolute;
  top: 101%;
  left: 13%;
  width: 74%;
} */
    }
 
    .header_2 {
    padding-left: 3% !important;
    margin-top: 8%;
    background-color: #0A4C89;
}
.control1{
 
 
 
 
  margin-left: 4% !important;
}
 
.imge12{
 
  max-width: 782px !important;
}
 
.comment-box .comment-text {
    position: absolute;
    top: 38%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    text-align: center;
    font-size: 12px !important;
}
 
.rounded-circle12 {
    width: 67vh;
    height: 51vh;
    padding: 1%;
}
.display-4 {
  font-family: Bitter;
        font-size: 3.5rem !important;
        font-weight: 500;
        float: left;
}
 
.team-member h4 {
        font-size: 17px;
        margin-top: 10%;
        font-family: "bitter";
    }
    .lead {
 
      font-size: 26px;
    }
 
    .control2{
 
      font-size: 29px;
 
    }
    #control1 {
    left: -104px !important;
}
 
 
    }
 
   
    @media(max-width:768px){
 
      .imge12 {
        max-width: 520px !important;
    }
 
    .header_2 {
    padding-left: 3% !important;
    margin-top: 11%;
    background-color: #0A4C89;
}
 
    .control2{
 
      font-size: 27px;
    }
 
    .display-4 {
        font-family: Bitter;
        font-size: 2.5rem !important;
        font-weight: 800;
    }
 
    .lead {
        font-size: 0.8rem !important;
     
    }
 
.display-4 {
        font-size: 2.5rem !important;
       
    }
 
    .team-member h4 {
        font-size: 16px;
        margin-top: 19%;
        font-family: "bitter";
    }
 
 
 
 
   
 
    }
 
 
    @media (max-width: 426px) {
 
     
  .team-member img {
            width: 81%;
            height: auto;
        }
 
 
.team-member p{
 
font-size: 10px;
}
 
.team-member h4{
 
font-size: 10px;
}
 
.imge_i{
 
  padding: 10% !important;
}
 
 
.lead {
        font-size: 0.8rem !important;
        color: #0A4C89;
    }
 
.display-4 {
        font-size: 2.5rem !important;
        color: #0A4C89;
    }
 
 
.header_2{
 
  margin-top: 20%;
}
 
.rounded-circle12 {
    width: 63vh;
    height: 51vh;
    padding: 0%;
 
}
 
.carousel-control-next {
        right: -49px !important;
        font-size: 56px;
    }
 
    .carousel-control-next, .carousel-control-prev {
      top: 8px !important;
 
    }
 
    #control1 {
        left: -49px !important;
    }
.ourpeople{
 
  padding: 1% !important;
}
 
.display-4{
  font-weight: 800 !important;
}
 
.sumbityour{
 
 font-size: 24px !important;
}
 
.areyou{
 
font-size: 11px;
font-family: ;
 
}
 
.team_members{
 
  font-size: 31px;
}
 
.btnapply{
 
  width: 45% !important;
  background-color: #0A4C89 !important;
  color: white !important;
 
}
 
.header_2 {
        margin-top: 23% !important;
        padding: 0% !important;
    }
 
.imge_i{
 
  padding: 8% !important;
  left: 0%;
}
 
.control2{
 
  font-size: 23px !important;
        margin-top: -74px;
 
}
 
.team_members {
    height: 0vh;
    margin-top: 1vh;
    font-weight: 700;
    font-family: Bitter;
    font-size: 30x;
 
}
 
.ourpeople3{
 
  display: flex;
    flex-direction: column;
}
 
 
.team-member h4 {
        font-size: 10px;
        margin-top: 19%;
    }
 
 
.header_2 {
    padding-left: 3% !important;
    margin-top: 10%;
    background-color: #ffffff;
    padding: 0% !important;
 
   
}
.ourpeople{
 
  display: flex;
  flex-direction: column;
  background-color: #ffffff;
}
 
 
 
    }
 
    @media (max-width: 376px) {
      #control1 {
        left: -36px !important;
    }
 
 
 
    }
 
@media (max-width: 320px) {
 
  .team-member img {
            width: 81%;
            height: auto;
        }
 
        .imge_i{
 
          padding: 9% !important;
        }
 
.team-member p{
 
font-size: 10px;
}
 
.control2{
 
  font-size: 23px !important;
}
 
 
 
.lead {
        font-size: 0.8rem !important;
        color: #0A4C89;
    }
 
.display-4 {
        font-size: 2.5rem !important;
        color: #0A4C89;
    }
 
 
.header_2{
 
  margin-top: 20%;
}
 
#control1 {
        left: -36px !important;
    }
.rounded-circle12 {
    width: 46vh;
    height: 51vh;
    padding: 0%;
 
}
 
#control1 {
        left: -35px !important;
    }
 
 
.carousel-control-next {
    right: -40px !important;
    font-size: 56px;
}
.ourpeople{
 
  padding: 1% !important;
}
 
.display-4{
  font-weight: 800!important;
}
 
.sumbityour{
 
 font-size: 24px !important;
}
 
.areyou{
 
font-size: 11px;
font-family: ;
 
}
 
.team_members{
 
  font-size: 31px;
}
 
.btnapply{
 
  width: 45% !important;
  background-color: #0A4C89 !important;
  color: white !important;
 
}
 
.header_2 {
        margin-top: 23% !important;
        padding: 0% !important;
    }
 
.imge_i{
 
  padding: 8% !important;
  left: 0%;
}
 
.team-member h4 {
        font-size: 10px;
        margin-top: 19%;
    }
 
.control2{
 
  font-size: 23px !important;
  margin-top: -74px;
}
 
.team_members {
    height: 0vh;
    margin-top: 1vh;
    font-weight: 700;
    font-family: Bitter;
    font-size: 30x;
 
}
 
.header_2 {
    padding-left: 3% !important;
    margin-top: 10%;
    background-color: #ffffff;
 
   
}
.ourpeople{
 
  display: flex;
  flex-direction: column;
  background-color: #ffffff;
}
 
}
/* Team member image container */
.team-member {
  position: relative;
  overflow: hidden;
}
 
/* Image animation */
.team-member img {
  transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
}
 
/* Hover effect */
.team-member:hover img {
  transform: scale(1.1); /* Scale up the image on hover */
  opacity: 0.8; /* Reduce opacity slightly */
}
 
 
 
   
  </style>
 
 
 
  <section>
    <div class="container-fluid ourpeople_banner mt-5 p-5">
      <div class="row">
      <div class="col-lg-2">
 
 
    </div>
        <div class="col-lg-4 mt-5">
          <h1 class="mt-5 text-left font-weight-bold mt-5 display-5 our_people_title">Our People</h1>
          <p class="text-left font-weight-bold our_people_title">Where Trust Meets Technology.</p>
        </div>
        <div class="col-lg-4">
        <img src="assets/img/70.png" class="img-fluid  mt-5" alt="Profile Image" >
 
 
        </div>
        <div class="col-lg-2">
 
 
        </div>
       
 
      </div>
 
    </div>
 
  </section>
 
 
  <!-- Submit Resume Section -->
  <section class="text-center py-5">
    <div class="container">
      <h2>Submit Your Resume</h2>
      <p>Are you a talented and resourceful professional who consistently adds value to your work? We would love to hear from you</p>
      <a href="#" class="btn btnapply">Apply Now →</a>
    </div>
  </section>
 
  <section>
    <div class="container">
      <h2 class="text-center mb-5">Team Leader</h2>
      <div class="text-center mb-5">
        <img src="images/Media.jpg" class="img-fluid inimge w-25">
        <h4 class="mt-4 font-weight-bold">Harshitha Gudela</h4>
        <p>Team Leader</p>
      </div>
    </div>
  </section>
 
  <section>
    <div class="container mt-5">
      <h2 class="text-center mb-4 mt-4">Team Members</h2>
    </div>
  </section>
 
  <section>
    <div class="while"></div>
  </section>
 
  <!-- Team Members Section -->
  <section class="py-5 imge_i">
    <div class="container imge12">
      <div id="teamCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <!-- First Slide -->
          <div class="carousel-item active">
            <div class="row">
              <div class="col-4 col-md-4 team-member">
                <img src="images/13.png" alt="Team Member 15" class="img-fluid inimge">
                <h4>Pattamatta Naga Hima Varsha</h4>
                <p>UI/UX Designer</p>
              </div>
              <div class="col-4 col-md-4 team-member">
                <img src="images/4.png" alt="Team Member 2" class="img-fluid imgescenter inimge">
                <h4>Nutan Boyana</h4>
                <p>PHP Developer</p>
              </div>
              <div class="col-4 col-md-4 team-member">
                <img src="images/38.png" alt="Team Member 3" class="img-fluid inimge">
                <h4>G Paavana Krishna</h4>
                <p>Video Editor</p>
              </div>
              <div class="col-4 col-md-4 team-member">
                <img src="images/16.png" alt="Team Member 4" class="img-fluid inimge">
                <h4>Metla Nagaraju</h4>
                <p>Back End Developer</p>
              </div>
              <div class="col-4 col-md-4 team-member">
                <img src="images/6.png" alt="Team Member 8" class="img-fluid imgescenter inimge">
                <h4>Pasumarthi Gowthami</h4>
                <p>Android Developer</p>
              </div>
              <div class="col-4 col-md-4 team-member">
                <img src="images/62.jpg" alt="Team Member 14" class="img-fluid imgescenter inimge">
                <h4>Sowmya</h4>
                <p>PHP Developer</p>
              </div>
            </div>
          </div>
          <!-- Second Slide -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-4 col-md-4 team-member">
                <img src="images/9.png" alt="Team Member 7" class="img-fluid inimge">
                <h4>Mamidi Anil kumar</h4>
                <p>Frontend Developer</p>
              </div>
              <div class="col-4 col-md-4 team-member">
                <!-- <img src="images/36.png" alt="Team Member 5" class="img-fluid imgescenter inimge">
                <h4>Divili Ramakanth</h4>
                <p>Intern</p> -->
              </div>
              <div class="col-4 col-md-4 team-member">
                <img src="images/12.png" alt="Team Member 9" class="img-fluid inimge">
                <h4>Mummina Arjun</h4>
                <p>Frontend Developer</p>
              </div>
              <div class="col-4 col-md-4 team-member">
                <img src="images/42.jpg" alt="Team Member 10" class="img-fluid inimge">
                <h4>B.Jitendra</h4>
                <p>Intern</p>
              </div>
              <div class="col-4 col-md-4 team-member">
                <img src="images/41.jpg" alt="Team Member 11" class="img-fluid imgescenter inimge">
                <h4>Ragini</h4>
                <p>Intern</p>
              </div>
              <div class="col-4 col-md-4 team-member">
                <img src="images/35.png" alt="Team Member 12" class="img-fluid inimge">
                <h4>Lakshman Ch</h4>
                <p>Intern</p>
              </div>
            </div>
          </div>
          <!-- Third Slide -->
          <!-- Add more slides if needed -->
        </div>
        <a class="carousel-control-prev control1" id="control1" href="#teamCarousel" role="button" data-slide="prev">
          <i class="fa-solid fa-circle-arrow-left control2" style="color: #EB7217;"></i>
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#teamCarousel" role="button" data-slide="next">
          <i class="fa-solid fa-circle-arrow-right control2" style="color: #eb7217;"></i>
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
   <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.btnapply').click(function(event){
        event.preventDefault();
        window.location.href = 'internship_application.php';
      });
    });
  </script>
 
  <?php
  include_once('include/footer.php');
  ?>
 
 
 
 