<?php
ob_start();
include './connect/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Web</title>
    <link rel="stylesheet" href="./css/HomeStyles.css">
    <link rel ="stylesheet" href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <script src="./js/HomE.js" defer></script>
</head>
<body>
    <nav class = "navbar">
        <ul>
            <li><a href="Home.php" class="left">Home</a></li>
            <li><a href="Events.php" class="left">Events</a></li>
            <li><a href="Gallery.php" class="left">Gallery</a></li>
            <li><a href="AboutUS.php" class="left">About Us</a></li>
            <li><a href="Login.php" class="right-link">Login</a></li>
        </ul>
    </nav>
<main>
    <div class="home-page">
        <svg
          class="carbon-next-outline"
          width="32"
          height="32"
          viewBox="0 0 32 32"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M16 8L14.57 9.393L20.15 15H8V17H20.15L14.57 22.573L16 24L24 16L16 8Z"
            fill="white"
          />
          <path
            d="M16 30C13.2311 30 10.5243 29.1789 8.22202 27.6406C5.91973 26.1022 4.12532 23.9157 3.06569 21.3576C2.00607 18.7994 1.72882 15.9845 2.26901 13.2687C2.80921 10.553 4.14258 8.05845 6.10051 6.10051C8.05845 4.14258 10.553 2.80921 13.2687 2.26901C15.9845 1.72882 18.7994 2.00607 21.3576 3.06569C23.9157 4.12532 26.1022 5.91973 27.6406 8.22202C29.1789 10.5243 30 13.2311 30 16C29.9958 19.7117 28.5194 23.2702 25.8948 25.8948C23.2702 28.5194 19.7117 29.9958 16 30ZM16 4.00001C13.6266 4.00001 11.3066 4.70379 9.33316 6.02237C7.35977 7.34095 5.8217 9.21509 4.91345 11.4078C4.0052 13.6005 3.76756 16.0133 4.23058 18.3411C4.69361 20.6689 5.83649 22.8071 7.51472 24.4853C9.19296 26.1635 11.3312 27.3064 13.6589 27.7694C15.9867 28.2325 18.3995 27.9948 20.5922 27.0866C22.7849 26.1783 24.6591 24.6402 25.9776 22.6668C27.2962 20.6935 28 18.3734 28 16C27.9963 12.8185 26.7308 9.76845 24.4812 7.51882C22.2316 5.26918 19.1815 4.00371 16 4.00001Z"
            fill="white"
          />
        </svg>
        <div class="rectangle-25"></div>
        <div class="home">
          <div class="rectangle-13"></div>
          <div class="background-whole-page"></div>
          <div class="group-12">
            <div class="portal">PORTAL</div>
            <div class="alumni">
              ALUMNI
              <br />
            </div>
            <div class="pamantasan-ng-lungsod-ng-san-pablo">
              PAMANTASAN NG LUNGSOD NG SAN PABLO
            </div>
          </div>
          <div class="logo">
            <div class="ellipse-2"></div>
            <img class="image-1" src="./images/logo.png" />
          </div>
          <img class="photo-grad" src="./images/gradpic_harapwalking-removebg.png" />
          <div class="placeholder-text-home"></div>
          <div
            class="step-into-a-world-of-nostalgia-camaraderie-and-endless-opportunities-as-you-return-to-our-alma-mater-s-embrace-whether-you-graduated-recently-or-years-ago-the-bonds-we-shared-as-part-of-the-pamantasan-ng-lunsod-ng-san-pablo-family-will-always-remain-unbreakable"
          >
            Step into a world of nostalgia, camaraderie, and endless opportunities as
            you return to our alma mater’s embrace.
            <br />
            <br />
            Whether you graduated recently or years ago, the bonds we shared as part
            of the Pamantasan ng Lunsod ng San Pablo family will always remain
            unbreakable.
          </div>
        </div>
        <div class="announcements">Announcements</div>
        <div class="tint-over-announcements"></div>
        <div class="rectangle-26"></div>
        <div class="rectangle-27"></div>
        <div class="see-all"><a href="Events.html">See All</a></div>
        <svg
          class="maki-arrow"
          width="28"
          height="28"
          viewBox="0 0 28 28"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <g opacity="0.8">
            <path
              d="M15.4803 4.28024C15.8303 3.93029 16.305 3.7337 16.8 3.7337C17.295 3.7337 17.7697 3.93029 18.1197 4.28024L26.5197 12.6802C26.8697 13.0303 27.0663 13.505 27.0663 14C27.0663 14.4949 26.8697 14.9697 26.5197 15.3197L18.1197 23.7197C17.7677 24.0597 17.2962 24.2479 16.8067 24.2436C16.3173 24.2394 15.8491 24.0431 15.503 23.697C15.1569 23.3509 14.9606 22.8827 14.9564 22.3933C14.9521 21.9038 15.1403 21.4323 15.4803 21.0802L20.5333 15.8666H2.80002C2.30495 15.8666 1.83015 15.67 1.48008 15.3199C1.13002 14.9698 0.93335 14.495 0.93335 14C0.93335 13.5049 1.13002 13.0301 1.48008 12.68C1.83015 12.33 2.30495 12.1333 2.80002 12.1333H20.5333L15.4803 6.9197C15.1303 6.56965 14.9337 6.09494 14.9337 5.59997C14.9337 5.105 15.1303 4.63029 15.4803 4.28024Z"
              fill="white"
            />
          </g>
        </svg>
        <?php
        $announce = mysqli_query($conn, "SELECT * FROM announcement");
        $announce_count = mysqli_num_rows($announce);
        if($announce_count > 0)
        {
          while($list_announce = mysqli_fetch_assoc($announce))
          {
            ?>
            <div class="announce">
              <div class="title">
                <?php
                echo $list_announce['title'];
                ?>
              </div>
              <div class="content">
                <?php
                echo $list_announce['content'];
                ?>
              </div>
              <div class="date">
                <?php
                echo $list_announce['date'];
                ?>
              </div>
            </div>
            <?php
          }
        }
        else
        {
          ?>
          <div class="">
            No New Announcement
          </div>
          <?php
        }
        ?>
        
        <div class="happening-now">Happening Now</div>
        <div class="container">
        <?php
          $carousel = mysqli_query($conn, "SELECT * FROM carousel_img");
          $carousel_count = mysqli_num_rows($carousel);
          if($carousel_count > 0)
          {
            ?>
            <div class="slider-wrapper">
              <button id="prev-slide" class="slide-button material-symbols-rounded">chevron_left</button>
              <div class="image-list">
                <?php
                  while($list_carousel = mysqli_fetch_assoc($carousel))
                  {
                    ?>
                    <img src ="./images/<?php echo $list_carousel['img']?>" alt="img-1" class = "image-item">
                    <?php
                  }
                ?>
              </div>
              <button id="next-slide" class="slide-button material-symbols-rounded">chevron_right</button>
            </div>
            <?php
          }
          else
          {
            ?>
              No Happening Now
            <?php
          }
        ?>
        </div>
                    
                
        <svg
          class="ic-baseline-copyright"
          width="9"
          height="9"
          viewBox="0 0 9 9"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <g clip-path="url(#clip0_64_358)">
            <path
              d="M4.455 3.4275C4.935 3.45 5.05875 3.85875 5.06625 4.05H5.7375C5.7075 3.3075 5.17875 2.85375 4.44375 2.85375C3.615 2.85375 3 3.375 3 4.5525C3 5.28 3.34875 6.1425 4.44 6.1425C5.2725 6.1425 5.71875 5.52375 5.73 5.03625H5.05875C5.0475 5.2575 4.89 5.55375 4.4475 5.57625C3.95625 5.56125 3.75 5.17875 3.75 4.5525C3.75 3.46875 4.23 3.435 4.455 3.4275ZM4.5 0.75C2.43 0.75 0.75 2.43 0.75 4.5C0.75 6.57 2.43 8.25 4.5 8.25C6.57 8.25 8.25 6.57 8.25 4.5C8.25 2.43 6.57 0.75 4.5 0.75ZM4.5 7.5C2.84625 7.5 1.5 6.15375 1.5 4.5C1.5 2.84625 2.84625 1.5 4.5 1.5C6.15375 1.5 7.5 2.84625 7.5 4.5C7.5 6.15375 6.15375 7.5 4.5 7.5Z"
              fill="white"
            />
          </g>
          <defs>
            <clipPath id="clip0_64_358">
              <rect width="9" height="9" fill="white" />
            </clipPath>
          </defs>
        </svg>
        
        <div class="rectangle-28"></div>
        <div class="logo2">
          <div class="ellipse-22"></div>
          <img class="image-12" src="./images/logo.png" />
        </div>
        <div class="group-122">
          <div class="association">ASSOCIATION</div>
          <div class="alumni2">
            ALUMNI
            <br />
          </div>
          <div class="pamantasan-ng-lungsod-ng-san-pablo2">
            PAMANTASAN NG LUNGSOD NG SAN PABLO
          </div>
        </div>
        <div class="_2024-pamantasan-ng-panlunsod-ng-san-pablo">
          2024 PAMANTASAN NG PANLUNSOD NG SAN PABLO
        </div>
      </div>
</main>    
</body>
</html>