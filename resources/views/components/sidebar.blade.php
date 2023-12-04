<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
   <link rel="stylesheet" href="styles.css">
</head>

<body>
   <div class="min-h-screen bg-[#f7f7f7]">
      <div class="sidebar min-h-screen w-[3.35rem] overflow-hidden border-r hover:w-56 hover:bg-white hover:shadow-lg">
         <div class="flex h-screen flex-col justify-between pt-2 pb-6 bg-[#223d5d]">
            <div>
               <div class="w-max p-2.5">
                  <img src="{{ asset('assets/logo/logo.png') }}" class="w-8 h-8" alt="logo-buddhi">
               </div>
               <ul class="mt-6 space-y-2 tracking-wide">
                  <li class="min-w-max">
                     <a href="/dashboard" aria-label="dashboard"
                        class="relative flex items-center space-x-4 px-4 py-3 text-white {{ $title === 'Dashboard' ? 'bg-gradient-to-r from-sky-600 to-cyan-400' : '' }}">
                        <i class="fa-solid fa-table-columns mr-1"></i>
                        <span class="group-hover:text-gray-700">Dashboard</span>
                     </a>
                  </li>
                  <li class="min-w-max">
                     <a href="/dashboard/users" class="group flex items-center space-x-4 px-4 py-3 text-white {{ $title === 'Account' ? 'bg-gradient-to-r from-sky-600 to-cyan-400' : '' }}">
                        <i class="fa-solid fa-user mr-2"></i>
                        <span class="group-hover:text-gray-700">Account</span>
                     </a>
                  </li>
                  <li class="min-w-max">
                     <a href="/dashboard/posts" class="group flex items-center space-x-4 px-4 py-3 text-white {{ $title === 'Posts' ? 'bg-gradient-to-r from-sky-600 to-cyan-400' : '' }}">
                        <i class="fa-solid fa-file mr-2"></i>
                        <span class="group-hover:text-gray-700">Posts</span>
                     </a>
                  </li>
                  <li class="min-w-max">
                     <a href="#" class="group flex items-center space-x-4 px-4 py-3 text-white">
                        <i class="fa-solid fa-list mr-1"></i>
                        <span class="group-hover:text-gray-700">Categories</span>
                     </a>
                  </li>
                  <li class="min-w-max">
                     <a href="#" class="group flex items-center space-x-4 px-4 py-3 text-white {{ $title === 'Carousel' ? 'bg-gradient-to-r from-sky-600 to-cyan-400' : '' }}">
                        <i class="fa-solid fa-image mr-1"></i>
                        <span class="group-hover:text-gray-700">Carousel</span>
                     </a>
                  </li>
                  <li class="min-w-max">
                     <a href="/dashboard/teachers" class="group flex items-center space-x-4 px-4 py-3 text-white {{ $title === 'Carousel' ? 'bg-gradient-to-r from-sky-600 to-cyan-400' : '' }}">
                        <i class="fa-solid fa-chalkboard-user mr-1"></i>
                        <span class="group-hover:text-gray-700">Teachers</span>
                     </a>
                  </li>
                  <li class="min-w-max">
                     <a href="/dashboard/subjects" class="group flex items-center space-x-4 px-4 py-3 text-white">
                        <i class="fa-solid fa-book mr-2"></i>
                        <span class="group-hover:text-gray-700">Subjects</span>
                     </a>
                  </li>
                  <li class="min-w-max">
                     <a href="/" class="group flex items-center space-x-4 px-4 py-3 text-white">
                        <i class="fa-solid fa-house mr-1"></i>
                        <span class="group-hover:text-gray-700">Home</span>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="w-max -mb-3">
               <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="group flex items-center space-x-4 px-4 py-3 text-white">
                     <i class="fa-solid fa-right-from-bracket mr-1"></i>
                     <span class="group-hover:text-gray-700">Logout</span>
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</body>