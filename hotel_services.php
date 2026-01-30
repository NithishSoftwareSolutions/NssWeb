<!-- ======= Header ======= -->
<?php
include_once 'include/loader.php';
        include_once 'include/header.php';
        include_once 'config.php';
 ?>

    <style>
        * {
  font-family: 'Nunito', sans-serif;
}
.gradient-text {
  background: linear-gradient(90deg, #000000, #6208B6);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.main-gradient {
  background: linear-gradient(90deg, #139EF8, #090605);
 
}
:root {
  --grad-main: linear-gradient(90deg, #6A5CFF, #E65BCF);
  --grad-bg: linear-gradient(
    180deg,
    rgba(106, 92, 255, 0.06),
    rgba(230, 91, 207, 0.06)
  );
}


  /* HERO */
  .hero {
    padding: 5% 0;
    background: #FFFFFF;
  }

  .hero h1 {
    color: #1F2937;
  }

  .hero p {
    color: #6B7280;
  }

  .btn-primary {
    background-color: #2C6AA6;
    border-color: #2C6AA6;
  }

  .btn-primary:hover {
    background-color: #245A8C;
    border-color: #245A8C;
  }

  /* FEATURE CARDS */
.feature-card {
  position: relative;
  border-radius: 18px;
  padding: 14px;
  text-align: center;
  background: var(--grad-bg);   /* 👈 gradient background */
  z-index: 1;
  transition: all 0.3s ease;
}

/* Gradient Border */
.feature-card::before {
  content: "";
  position: absolute;
  inset: 0;
  padding: 1.5px;
  border-radius: 18px;
  background: var(--grad-main);
  -webkit-mask:
    linear-gradient(#fff 0 0) content-box,
    linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  z-index: -1;
}

.feature-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 16px 35px rgba(106, 92, 255, 0.25);
}
.feature-icon {
  width: 30px;
  margin: 0 auto 14px;
  display: block;
}
.feature-card h6 {
  font-weight: 600;
  background: var(--grad-main);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

  /* SCREENS */
  .screens img {
    width: 100%;
    border-radius: 12px;
    background: #FFFFFF;
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
  }


  h3 {
    color: #1F2937;
  }



</style>

  <section class="hero text-center ">
    <h1 class="fw-bold text-center text-white main-gradient mb-3 pt-3 pb-3">Hotel Management</h1>

  <div class="container">
    

    <div class="row align-items-center mt-5">
      <div class="col-md-6 text-start">
     
        <h4 class="fw-bold gradient-text">Smart solutions to optimize your hotel workflow and operations.</h4>
        <p class="text-muted ">
         A hotel management system helps organize all hotel activities—like bookings, check-ins/outs, billing, and housekeeping—in one place..
        </p>
        <button class="btn btn-primary rounded-pill px-4">Get Started</button>
      </div>
      <div class="col-md-6">
        <img style="width:100%"src="assets/img/hotel_services_dashboard.png" alt="Dashboard">
      </div>
    </div>
  </div>
</section>
  <section class="text-center ">

  <div class="container">
    

    <div class="row align-items-center">
      <div class="col-md-8 text-start">
     
        <h4 class="fw-bold gradient-text">Effortless Management for Cleaning & Upkeep</h4>
        <p class="text-muted ">
A hotel management system helps organize all hotel activities—like bookings, check-ins/outs, billing, and housekeeping—in one place..
        </p>
        <p class="text-muted ">This system streamlines housekeeping and maintenance tasks for hotels and offices.
It ensures timely cleaning, repairs, and smooth daily operations.Easily schedule and track housekeeping and maintenance activities. Keep spaces clean, organized, and running efficiently with minimal effort.</p>
      </div>
     
    </div>
  </div>
</section>
<!-- FEATURES -->
<section class="py-5">
  <div class="container">
    <h3 class="text-center fw-bold gradient-text text-underline mb-4">Featured Services</h3>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="card feature-card  h-100 text-center">
            <img src="assets/img/room.png" alt="Room Configuration" class="feature-icon mb-3">
            <h6 class="fw-bold">Room Configuration</h6>
            <p class="text-muted small">Room configuration helps set up room types, layouts, and amenities for smooth hotel operations. It ensures accurate room availability, pricing, and guest comfort management.</p>
        </div>

      </div>
      <div class="col-md-4">
        <div class="card feature-card  h-100 text-center">
          <img src="assets/img/new_company.png" alt="New Company" class="feature-icon mb-3">

          <h6 class="fw-bold">New Company Page</h6>
          <p class="text-muted small">Simplify housekeeping and maintenance for your hotel, office, or facility.Ensure smooth operations, timely upkeep, and a clean, organized environment.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card feature-card   h-100 text-center">
          <img src="assets/img/fix_tariff.png" alt="Fix Tariff" class="feature-icon mb-3">

          <h6 class="fw-bold">Fix Tariff Page</h6>
          <p class="text-muted small">Fixed tariff defines standard room prices based on room type and occupancy.It ensures consistent and transparent pricing for hotel bookings.</p>
        </div>
      </div>
       <div class="col-md-4">
        <div class="card feature-card   h-100 text-center">
          <img src="assets/img/reservation.png" alt="Reservation Page" class="feature-icon mb-3">

          <h6 class="fw-bold">Reservation Page</h6>
          <p class="text-muted small">
            Room Shifting.
Handle room reservations and booking details seamlessly.Track guest information and room status in real time.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card feature-card   h-100 text-center">
          <img src="assets/img/checkin.png" alt="Check-In Page" class="feature-icon mb-3">

          <h6 class="fw-bold">Check-In Page</h6>
          <p class="text-muted small">
            Record guest details and assign rooms during check-in.Ensure a smooth and quick guest entry process.
        </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card feature-card   h-100 text-center">
          <img src="assets/img/additional_Services.png" alt="Additional Service Page" class="feature-icon mb-3">

          <h6 class="fw-bold">Additional Service Page</h6>
          <p class="text-muted small">Manage restaurant-related services and guest orders easily.Ensure accurate billing and smooth service operations.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card feature-card   h-100 text-center">
          <img src="assets/img/restuarant.png" alt= "restuarant Additional Service Page" class="feature-icon mb-3">

          <h6 class="fw-bold">Restaurant Additional Service</h6>
          <p class="text-muted small">Manage restaurant-related services and guest orders easily.Ensure accurate billing and smooth service operations.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card feature-card   h-100 text-center">
        <img src="assets/img/checkout.png" alt= "Check-Out Page" class="feature-icon mb-3">
          <h6 class="fw-bold">Check-Out Page</h6>
          <p class="text-muted small">Manage restaurant-related services and guest orders easily.Ensure accurate billing and smooth service operations..</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SCREENS -->
<section class="py-5 bg-white">
  <div class="container">
    <h3 class="text-center fw-bold mb-5 gradient-text">Hotel Management Screens</h3>

    <div class="row justify-content-center screens g-4">
      <!-- <div class="col-md-4"> -->
        <img src="assets/img/screens.png" alt="Screen 1">
      <!-- </div>
      <div class="col-md-3">
        <img src="https://via.placeholder.com/250x400" alt="Screen 2">
      </div>
      <div class="col-md-3">
        <img src="https://via.placeholder.com/250x400" alt="Screen 3">
      </div> -->
    </div>
  </div>
</section>





<?php
    include_once 'include/footer.php';
?>
