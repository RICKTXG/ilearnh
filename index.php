<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap"
rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Document</title>
</head>


























<body>
  <span class="absolute text-white text-4xl top-5 left-4 cursor-pointer" onclick="Openbar()">
    <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
  </span>
  <div class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] duration-1000
    p-2 w-[300px] overflow-y-auto text-center bg-gray-900 shadow h-screen">
    <div class="text-gray-100 text-xl">
      <div class="p-2.5 mt-1 flex items-center rounded-md ">
        <span class="text-2xl font-[Poppins] cursor-pointer">
            <img class="h-20 inline"
              src="logo.png">
        
    
          </span>
    
        <h1 class="text-[15px]  ml-3 text-xl text-gray-200 font-bold">L-earn</h1>
        <i class="bi bi-x ml-20 cursor-pointer lg:hidden" onclick="Openbar()"></i>
      </div>
      <hr class="my-2 text-gray-600">

      
      <div>
        <div class="p-2.5 mt-3 flex items-center rounded-md 
        px-4 duration-300 cursor-pointer  bg-gray-700">
          <i class="bi bi-search text-sm"></i>
          <input class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" placeholder="Serach" />
        </div>
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-orange-500">
            <i class="bi bi-bookmark-fill"></i>
            <span class="text-[15px] ml-4 text-gray-200">Login</span>
          </div>
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-orange-500">
          <i class="bi bi-house-door-fill"></i>
          <span class="text-[15px] ml-4 text-gray-200">Home</span>
        </div>
        <a href="pay.php">
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-orange-500">
            <i class="bi bi-bookmark-fill"></i>
            <span class="text-[15px] ml-4 text-gray-200">Courses</span>
          </div>
        </a>
          
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-orange-500">
          <i class="bi bi-bookmark-fill"></i>
          <span class="text-[15px] ml-4 text-gray-200">Blogs</span>
        </div>
    
          <a href="contact.php">
          <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-orange-500">
            <i class="bi bi-bookmark-fill"></i>
            <span class="text-[15px] ml-4 text-gray-200">Contact us</span>
          </div>
        </a>

        <hr class="my-4 text-gray-600">
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-orange-500">
          <i class="bi bi-envelope-fill"></i>
          <span class="text-[15px] ml-4 text-gray-200">Messages</span>
        </div>

        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-orange-500">
          <i class="bi bi-chat-left-text-fill"></i>
          <div class="flex justify-between w-full items-center" onclick="dropDown()">
            <span class="text-[15px] ml-4 text-gray-200">Contact</span>
            <span class="text-sm rotate-180" id="arrow">
              <i class="bi bi-chevron-down"></i>
            </span>
          </div>
        </div>
        <div class=" leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto" id="submenu">
          <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Instagram</h1>
          <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Facebook</h1>
          <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Telegram</h1>
        </div>
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-orange-500">
          <i class="bi bi-box-arrow-in-right"></i>
          <span class="text-[15px] ml-4 text-gray-200">Logout</span>
        </div>

      </div>
    </div>
  </div>

  <script>
    function dropDown() {
      document.querySelector('#submenu').classList.toggle('hidden')
      document.querySelector('#arrow').classList.toggle('rotate-0')
    }
    dropDown()

    function Openbar() {
      document.querySelector('.sidebar').classList.toggle('left-[-300px]')
    }
  </script>
</body>

</html



















  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -mx-4 -mb-10 text-center">
        <div class="sm:w-1/2 mb-10 px-4">
          <div class="rounded-lg h-64 overflow-hidden">
            <img alt="content" class="object-cover object-center h-full w-full" src="https://source.unsplash.com/random/1202x502/?buisness">
          </div>
          <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Affiliate Marketing  ||  Online Business</h2>
          <a href="pay.html">
          <button        class="flex mx-auto mt-6 text-white bg-orange-500 border-0 py-2 px-5 focus:outline-none hover:bg-orange-600 rounded">Join now!</button></a>
        </div>
    </div>
  </section>
  




                   


















  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center"></h1>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/2 w-full">
          <div class="h-full bg-gray-100 p-8 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
              <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
            </svg>
            <p class="leading-relaxed mb-6"> I choose a lazy person to do a hard job. Because a lazy person will find an easy way to do it.</p>
            <a class="inline-flex items-center">
              <img alt="testimonial" src="https://dummyimage.com/106x106" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
              <span class="flex-grow flex flex-col pl-4">
                <span class="title-font font-medium text-gray-900">Bill Gates</span>
                <span class="text-gray-500 text-sm">American business magnate</span>
              </span>
            </a>
          </div>
        </div>
        <div class="p-4 md:w-1/2 w-full">
          <div class="h-full bg-gray-100 p-8 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
              <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
            </svg>
            <p class="leading-relaxed mb-6">Don't confuse schooling with education. I didn't go to Harvard but the people that work for me did.   </p>
            <a class="inline-flex items-center">
              <img alt="testimonial" src="https://dummyimage.com/106x106" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
              <span class="flex-grow flex flex-col pl-4">
                <span class="title-font font-medium text-gray-900">Elon Musk</span>
                <span class="text-gray-500 text-sm">CEO of Tesla Motors</span>
              </span>
            </a>
          </div>
        </div>
        <div class="p-4 md:w-1/2 w-full">
          <div class="h-full bg-gray-100 p-8 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
              <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
            </svg>
            <p class="leading-relaxed mb-6">I don't believe in taking right decisions. I take decisions and then make them right.</p>
            <a class="inline-flex items-center">
              <img alt="testimonial" src="https://dummyimage.com/107x107" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
              <span class="flex-grow flex flex-col pl-4">
                <span class="title-font font-medium text-gray-900">Ratan Tata</span>
                <span class="text-gray-500 text-sm">DESIGNER</span>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>



















  
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="text-center mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">[Please ask yourself]<br>Why business is better than job? </h1>
        <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">There is no limit on how much and how fast you can earn as a Business owner. Whereas in Job you will have to wait for a certain time period for taking the next hike, no matter how good you are.<br><br></p>
      <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
        <div class="p-2 sm:w-1/2 w-full">
          <div class="bg-gray-100 rounded flex p-4 h-full items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-orange-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
              <path d="M22 4L12 14.01l-3-3"></path>
            </svg>
            <span class="title-font font-medium">High quality content</span>
          </div>
        </div>
        <div class="p-2 sm:w-1/2 w-full">
          <div class="bg-gray-100 rounded flex p-4 h-full items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-orange-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
              <path d="M22 4L12 14.01l-3-3"></path>
            </svg>
            <span class="title-font font-medium">Easy to use [age:10+]</span>
          </div>
        </div>
        <div class="p-2 sm:w-1/2 w-full">
          <div class="bg-gray-100 rounded flex p-4 h-full items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-orange-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
              <path d="M22 4L12 14.01l-3-3"></path>
            </svg>
            <span class="title-font font-medium">Learn in one week</span>
          </div>
        </div>
        <div class="p-2 sm:w-1/2 w-full">
          <div class="bg-gray-100 rounded flex p-4 h-full items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-orange-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
              <path d="M22 4L12 14.01l-3-3"></path>
            </svg>
            <span class="title-font font-medium">Make your own community</span>
          </div>
        </div>
        <div class="p-2 sm:w-1/2 w-full">
          <div class="bg-gray-100 rounded flex p-4 h-full items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-orange-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
              <path d="M22 4L12 14.01l-3-3"></path>
            </svg>
            <span class="title-font font-medium">It's need very short time</span>
          </div>
        </div>
        <div class="p-2 sm:w-1/2 w-full">
          <div class="bg-gray-100 rounded flex p-4 h-full items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-orange-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
              <path d="M22 4L12 14.01l-3-3"></path>
            </svg>
            <span class="title-font font-medium">Be your own boss</span>
          </div>
        </div>
      </div>
     
    </div>
  </section>








  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4 text-center">
        <div class="p-4 sm:w-1/4 w-1/2">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">2.7K</h2>
          <p class="leading-relaxed">Users</p>
        </div>
        <div class="p-4 sm:w-1/4 w-1/2">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">1.8K</h2>
          <p class="leading-relaxed">Subscribes</p>
        </div>
        <div class="p-4 sm:w-1/4 w-1/2">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">0.3K</h2>
          <p class="leading-relaxed">Completed</p>
        </div>
        <div class="p-4 sm:w-1/4 w-1/2">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">4</h2>
          <p class="leading-relaxed">Plans</p>
        </div>
      </div>
    </div>
  </section>















  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Pricing</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan direct trade mumblecore 3 wolf moon twee</p>
      </div>
      <div class="lg:w-2/3 w-full mx-auto overflow-auto">
        <table class="table-auto w-full text-left whitespace-no-wrap">
          <thead>
            <tr>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">Plan</th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Post</th>
             
              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Price</th>
              <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="px-4 py-3">Start</td>
              <td class="px-4 py-3">Beginner</td>
           
              <td class="px-4 py-3 text-lg text-gray-900">1,499₹</td>
              <td class="w-10 text-center">
                <input name="plan" type="radio">
              </td>
            </tr>
            <tr>
              <td class="border-t-2 border-gray-200 px-4 py-3">Pro</td>
              <td class="border-t-2 border-gray-200 px-4 py-3">Part time</td>
         
              <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">3,999₹</td>
              <td class="border-t-2 border-gray-200 w-10 text-center">
                <input name="plan" type="radio">
              </td>
            </tr>
            <tr>
              <td class="border-t-2 border-gray-200 px-4 py-3">Business</td>
              <td class="border-t-2 border-gray-200 px-4 py-3">Professional</td>
           
              <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">6,999₹</td>
              <td class="border-t-2 border-gray-200 w-10 text-center">
                <input name="plan" type="radio">
              </td>
            </tr>
            <tr>
              <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">Exclusive</td>
              <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">Our  Official</td>
         
              <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3 text-lg text-gray-900">9,999₹</td>
              <td class="border-t-2 border-b-2 border-gray-200 w-10 text-center">
                <input name="plan" type="radio">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
       
        
         
        </a>
        <a href="pay.html">
        <button class="flex ml-auto text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-orange-600 rounded">Buy Now!</button></a>
      </div>
    </div>
  </section>




















  <section class="text-gray-600 body-font relative">
    <div class="absolute inset-0 bg-gray-300">
      <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://maps.google.com/maps/place/Asia/@29,100,3z/data=!3m1!4b1!4m5!3m4!1s0x3663f18a24cbe857:0xa9416bfcd3a0f459!8m2!3d34.047863!4d100.6196553" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
    </div>
    <div class="container px-5 py-24 mx-auto flex">
      <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
        <p class="leading-relaxed mb-5 text-gray-600">Post your Feedback and tell others what you think. </p>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
          <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
          <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        </div>
        <button class="text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-orange-600 rounded text-lg">Submit :)</button>
        <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
      </div>
    </div>
  </section>



  












  <footer class="text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
       
        <span class="ml-3 text-xl">L-earn</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2022 L-earn —
        <a href="https://instagram.com/Rick_txg" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">insta(LINK)</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </footer>



</body>
</html>