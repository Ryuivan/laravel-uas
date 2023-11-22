<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav class="bg-[#f27b00] border-gray-200 shadow-xl sticky z-10 top-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src={{ asset("assets/logo/logo.png") }} class="max-[400px]:w-12 max-[400px]:h-12 w-16 h-16"
                    alt="Logo Buddhi" />
                <span class="max-[400px]:text-lg self-center text-2xl font-semibold whitespace-nowrap text-white">SMK
                    Buddhi</span>
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="max-[400px]:w-8 max-[400px]:h-8 w-10 h-10 rounded-full border-0" src={{
                        asset("assets/profile/usernull.jpg") }} alt="Profile Picture">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                        <span class="block text-sm text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-[#e48625]">Sasd</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-user">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <li>
                        <a href="/"
                            class="transition duration-300 block py-2 px-3 rounded md:hover:bg-transparent md:hover:text-[#223d5d] md:p-0 {{ ($title === 'Home') ? 'text-[#223d5d]': ' text-white'}}"
                            aria-current="page">Home</a>
                    </li>
                    <li class="relative">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownTentang"
                            class="transition duration-300 flex items-center justify-between w-full py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#223d5d] md:p-0 md:w-auto border-gray-700 {{ (($title === 'Visi dan Misi') || ($title === 'Fasilitas') || ($title === 'Peraturan')) ? 'text-[#223d5d]': ' text-white'}}">Tentang
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownTentang"
                            class="z-10 hidden font-normal bg-[#e9e8e5] divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <ul class="dropdown-menu">
                                    <a href="/visi-misi" class="block px-4 py-2 hover:bg-gray-100">Visi dan Misi</a>
                                </ul>
                                <ul class="dropdown-menu">
                                    <a href="/fasilitas" class="block px-4 py-2 hover:bg-gray-100">Fasilitas</a>
                                </ul>
                                <ul class="dropdown-menu">
                                    <a href="/peraturan" class="block px-4 py-2 hover:bg-gray-100">Peraturan</a>
                                </ul>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownKesiswaan"
                            class="transition duration-300 flex items-center justify-between w-full py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#223d5d] md:p-0 md:w-auto border-gray-700">Kesiswaan
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <div id="dropdownKesiswaan"
                            class="z-10 hidden font-normal bg-[#e9e8e5] divide-y divide-gray-100 rounded-lg shadow w-44 ">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/ekstrakulikuler"
                                        class="block px-4 py-2 hover:bg-gray-100">Ekstrakurikuler</a>
                                </li>
                                <li>
                                    <a href="/osis" class="block px-4 py-2 hover:bg-gray-100">OSIS</a>
                                </li>
                                <li>
                                    <a href="/prestasi" class="block px-4 py-2 hover:bg-gray-100">Prestasi</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownProgramKeahlian"
                            class="transition duration-300 flex items-center justify-between w-full py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#223d5d] md:p-0 md:w-auto border-gray-700">Program
                            Keahlian
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownProgramKeahlian"
                            class="z-10 hidden font-normal bg-[#e9e8e5] divide-y divide-gray-100 rounded-lg shadow w-44 ">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/akuntansi" class="block px-4 py-2 hover:bg-gray-100">Akuntansi</a>
                                </li>
                                <li></li>
                                <a href="/multimedia" class="block px-4 py-2 hover:bg-gray-100">Multimedia</a>
                    </li>
                </ul>
            </div>
            </li>
            <li>
                <a href="/gallery"
                    class="transition duration-300 block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#223d5d] md:p-0 {{ ($title === 'Gallery') ? 'text-[#223d5d]': 'text-white'}}">Gallery</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
</body>

</html>