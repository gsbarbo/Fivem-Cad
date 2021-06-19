<header x-data="{ mobileMenuOpen : false }"
    class="relative flex flex-row flex-wrap justify-between px-6 py-6 bg-gray-900 md:items-center md:space-x-4">
    <a href="#" class="block text-indigo-500">
        {{ config('cad.community_name') }}
    </a>
    <button @click="mobileMenuOpen = !mobileMenuOpen"
        class="inline-block w-8 h-8 p-1 text-gray-600 bg-gray-200 md:hidden">
        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
        </svg>
    </button>
    <nav class="absolute left-0 z-20 flex-col w-full p-6 pt-0 font-semibold bg-gray-900 rounded-lg shadow-md md:relative top-16 md:top-0 md:flex md:flex-row md:space-x-6 md:w-auto md:rounded-none md:shadow-none md:p-0"
        :class="{ 'flex' : mobileMenuOpen , 'hidden' : !mobileMenuOpen}" @click.away="mobileMenuOpen = false">

        <a href="#" class="block py-1 text-indigo-500 hover:underline">Home</a>
        <a href="#" class="block py-1 text-gray-500 hover:underline">About us</a>
        <a href="#" class="block py-1 text-gray-500 hover:underline">Departments</a>
        @guest
            <a href="#" class="block py-1 text-gray-500 hover:underline">Login</a>
        @endguest

        @auth
            <a href="#" class="block py-1 text-gray-500 hover:underline">Portal</a>
            <a href="#" class="block py-1 text-gray-500 hover:underline">Profile</a>
            <a href="#" class="block py-1 text-gray-500 hover:underline">Logout</a>
        @endauth
    </nav>
</header>
