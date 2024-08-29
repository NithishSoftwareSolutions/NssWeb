
  <style>
    /* Full-screen loader styling */
    #loader {
      position: fixed;
      width: 100%;
      height: 100%;
      background-color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    .hidden {
      display: none;
    }

    .independence-container {
      display: none; /* Hide the content initially */
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: white;
    }

    /* Loader animation */
    #lk {
      animation: d 2s linear infinite;
      transform-origin: 50% 50%;
    }

    @keyframes d {
      0% {
        transform: rotateY(0deg) rotateZ(0deg);
      }
      50% {
        transform: rotateY(10deg) rotateZ(0.5deg);
      }
      100% {
        transform: rotateY(0deg) rotateZ(0deg);
      }
    }

    /* Indian flag gradient for the text */
    .independence-day-text {
      margin-top: 20px;
      font-size: 36px;
      font-family: Arial, sans-serif;
      font-weight: bold;
      text-align: center;
      background: linear-gradient(90deg, #FF9933 33%, #138808 66%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
  </style>
</head>
<body>
  <!-- Loader container -->
  <div id="loader">
    <svg width="410px" height="400px">
      <image href="https://media.istockphoto.com/photos/indian-flag-waving-symbol-of-india-picture-id961226424?k=20&m=961226424&s=170667a&w=0&h=ULsQ0FMFgJ0j29d6vlqbQBDDdaVWzSrieQ4zwfsKbho=" height="215" width="410" preserveAspectRatio="none" id="lk" />
    </svg>
  </div>

 

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const loader = document.getElementById('loader');
      const mainContent = document.getElementById('main-content');

      // Hide the loader and show the main content
      if (loader) {
        loader.style.display = 'none';
      }
      if (mainContent) {
        mainContent.style.display = 'flex';
      }
    });
  </script>
</body>
</html>
