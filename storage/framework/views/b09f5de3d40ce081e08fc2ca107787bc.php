<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jobstore Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* Custom Styles */
    .hero-image {
        background-image: url('https://filworx.com/wp-content/uploads/2019/11/Filworx_Job-Portal-Advantages-for-Job-Seekers-and-Employers_Cargullo_Image_01.jpg');
        background-size: cover;
        background-position: center;
    }

    /* Custom Tailwind CSS Classes */
    .text-6xl {
      font-size: 4rem;
    }

    .text-4xl {
      font-size: 2.5rem;
    }

    .bg-blue-500 {
      background-color: #3B82F6;
    }

    .bg-blue-600 {
      background-color: #ffffff;
    }

    .bg-white {
      background-color: #FFF;
    }

    .text-blue-500 {
      color: #3B82F6;
    }

    .text-blue-600 {
      color: #2563EB;
    }

    .text-white {
      color: #FFF;
    }

    .text-blue {
      color: #1516e3;
    }

    .footer-logo {
        width: 100px;
    }

    .vertical-space {
        margin-top: 100px;
    }

    .vertical-space-top {
        margin-bottom: 50px;
    }
    .menu {
      display: none;
      position: absolute;
      top: 100%;
      right: 0;
      width: 200px;
      padding: 10px;
      background-color: #fff;
      border: 1px solid #ccc;
    }

    .menu a {
      display: block;
      padding: 5px;
      color: #000;
      text-decoration: none;
    }

    /* Hide the hamburger icon and checkbox by default */
    .hamburger,
    .menu-toggle {
      display: none;
    }

    @media (max-width: 768px) {
      .menu-toggle {
        display: block;
      }

      /* Show the hamburger icon */
      .hamburger {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 30px;
        height: 30px;
        cursor: pointer;
      }

      .hamburger-bar {
        width: 100%;
        height: 2px;
        background-color: #000;
        margin-bottom: 4px;
      }

      .menu {
        position: static;
        display: none;
      }

      .menu-toggle:checked + .menu {
        display: block;
      }
    }
  </style>
</head>

<body>
  <header class="bg-blue-600">
    <div class="container mx-auto px-4 py-6 flex items-center justify-between">
        <img src="https://asset.jobstore.com/images/branding/jobstore_logo_blue.png" class="header_top_left_img" alt="Jobstore.com Malaysia logo">
        <div class="header_center_left">
            <ul class="flex space-x-4 text-blue">
                <li><a href="#">Browse Jobs</a></li>
                <li><a href="#">Companies</a></li>
                <li><a href="#">Download App</a></li>
              </ul>
            </div>
      <nav>
        <ul class="flex space-x-4 text-blue">
          <li><a href="#">Register</a></li>
          <li><a href="#">Login</a></li>
          <li><a href="#">For Employers</a></li>
        </ul>
      </nav>
    </div>
  </header>

<main>
    <section class="hero-image py-32">
    <div class="container mx-auto text-center">
    <h1 class="text-blue text-6xl font-bold mb-6 p-4">10,374 jobs available in Malaysia</h1>
      <form class="flex justify-center mb-10">
        <input type="text" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 w-1/2" placeholder="Search for jobs...">
      </form>
      <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white py-4 px-8 rounded-lg font-bold">Search Jobs</a>
    </div>
  </section>

  <section class="bg-white py-20">
    <div class="container mx-auto">
      <h2 class="text-4xl text-center mb-10">Featured Jobs</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white shadow-lg rounded-lg p-8">
          <h3 class="text-2xl font-bold mb-4">Job Title 1</h3>
          <p class="text-lg mb-2">Company Name 1</p>
          <p class="text-lg mb-4">Location 1</p>
          <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg block w-full text-center font-bold">Learn More</a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-8">
          <h3 class="text-2xl font-bold mb-4">Job Title 2</h3>
          <p class="text-lg mb-2">Company Name 2</p>
          <p class="text-lg mb-4">Location 2</p>
          <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg block w-full text-center font-bold">Learn More</a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-8">
          <h3 class="text-2xl font-bold mb-4">Job Title 3</h3>
          <p class="text-lg mb-2">Company Name 3</p>
          <p class="text-lg mb-4">Location 3</p>
          <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg block w-full text-center font-bold">Learn More</a>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray-200 py-20">
    <div class="container mx-auto">
      <h2 class="text-4xl text-center mb-10">Trusted by Leading Companies</h2>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
        <div class="bg-white shadow-lg rounded-lg p-8 flex items-center justify-center">
          <a href="https://www.jobstore.com/my/companies" target="_blank">
            <img src="//asset.jobstore.com/uploads/image/755470/oxkikZNLjI/379005_410686465665575_1676421468_n.jpg" alt="AEON Credit Service (M) Berhad company logo" class="max-w-full h-auto">
          </a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-8 flex items-center justify-center">
          <a href="https://www.jobstore.com/my/companies" target="_blank">
            <img src="//assets.jobstore.com/uploads/image/21/pZcfqaT5kI/1644572584380.jpeg" alt="Agensi Pekerjaan Seer Sdn Bhd company logo" class="max-w-full h-auto">
          </a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-8 flex items-center justify-center">
          <a href="https://www.jobstore.com/my/companies" target="_blank">
            <img src="https://assets.jobstore.com/images/logo_letter/M.png" class="no_logo" alt="MYAirline Sdn Bhd has no company logo" class="max-w-full h-auto">
          </a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-8 flex items-center justify-center">
          <a href="https://www.jobstore.com/my/companies" target="_blank">
            <img src="//asset.jobstore.com/uploads/image/755470/dubUVYioFF/13134_logo_0_7829404.jpg" alt="Lighthouse Worldwide Solutions ( M ) Sdn Bhd company logo" class="max-w-full h-auto">
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="py-10">
    <div class="container mx-auto">
      <h2 class="text-4xl text-center mb-8">Why companies choose JobStore</h2>
      <div class="flex justify-center">
        <div class="w-1/3 text-center">
          <img src="https://www.jobstreet.com.my/en/cms/employer/wp-content/uploads/sites/4/2023/03/why1.png" alt="why1" class="mx-auto w-40 h-40 mb-4">
          <h3 class="text-xl mb-2">We're The Job' 1st Choice</h3>
          <h4 class="text-lg">Access to 5.2+ million talent in Malaysia*</h4>
        </div>
        <div class="w-1/3 text-center">
          <img src="https://www.jobstreet.com.my/en/cms/employer/wp-content/uploads/sites/4/2023/03/why2.png" alt="why2" class="mx-auto w-40 h-40 mb-4">
          <h3 class="text-xl mb-2">We're Trusted</h3>
          <h4 class="text-lg">Trusted by 1+ million companies in Asia</h4>
        </div>
        <div class="w-1/3 text-center">
          <img src="https://www.jobstreet.com.my/en/cms/employer/wp-content/uploads/sites/4/2023/03/why3.png" alt="why3" class="mx-auto w-40 h-40 mb-4">
          <h3 class="text-xl mb-2">We've Got You</h3>
          <h4 class="text-lg">We are always ready to help</h4>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray-200 py-20">
    <div class="container mx-auto">
      <h2 class="text-4xl text-center mb-10">Customer Reviews</h2>
      <div class="flex justify-center items-center space-x-8">
        <div class="w-1/3">
          <div class="bg-white shadow-lg rounded-lg p-8">
            <p class="text-lg mb-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur ipsum non dolor mollis, in consequat ligula cursus. Vestibulum sed commodo diam."</p>
            <p class="text-lg font-bold">John Doe</p>
            <p class="text-lg">Company Name</p>
          </div>
        </div>
        <div class="w-1/3">
          <div class="bg-white shadow-lg rounded-lg p-8">
            <p class="text-lg mb-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur ipsum non dolor mollis, in consequat ligula cursus. Vestibulum sed commodo diam."</p>
            <p class="text-lg font-bold">Jane Smith</p>
            <p class="text-lg">Company Name</p>
          </div>
        </div>
        <div class="w-1/3">
          <div class="bg-white shadow-lg rounded-lg p-8">
            <p class="text-lg mb-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur ipsum non dolor mollis, in consequat ligula cursus. Vestibulum sed commodo diam."</p>
            <p class="text-lg font-bold">David Johnson</p>
            <p class="text-lg">Company Name</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  </main>

  <footer class="bg-white py-4 relative">
    <div class="container mx-auto text-center vertical-space-top">
      <div class="grid grid-cols-3 gap-4">
        <div class="footer-column">
          <h3 class="footer-heading text-blue">About Us</h3>
          <ul class="footer-links">
            <li><a href="#">Company</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Press</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h3 class="footer-heading text-blue">Support</h3>
          <ul class="footer-links">
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h3 class="footer-heading text-blue">Follow Us</h3>
          <ul class="footer-social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
        <div class="footer-bottom absolute bottom-0 right-0">
            <div class="container mx-auto text-center vertical-space">
            <img src="https://asset.jobstore.com/images/branding/jobstore_logo_blue.png" alt="Jobstore.com logo footer" class="footer-logo">
            <p class="footer-text">&copy; 2023 Jobstore. All rights reserved.</p>
            </div>
        </div>
    </div>
  </footer>
</body>

</html><?php /**PATH /Users/mac/Desktop/Jobstore/jobstore/resources/views/welcome.blade.php ENDPATH**/ ?>