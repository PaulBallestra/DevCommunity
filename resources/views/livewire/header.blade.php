<!-- MENU MOBILE -->
<header class="block sticky top-0 z-50" style="background-color: #10100F;">
    <nav class="flex flex-wrap items-center justify-end w-auto py-4 px-2 text-lg">

        <a href="/" class="mx-auto"><img src="{{ asset('images/DevCommunity_Logo.png') }}" alt="Logo West A&D"
                                         class="h-2 lg:mr-500px"></a>

        <!-- BURGER MENU -->
        <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer lg:hidden block"
             fill="none" viewBox="0 0 24 24" stroke="#CAB776">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>

        <!-- CONTENT NAV -->
        <div class="hidden w-full lg:flex lg:items-center lg:w-auto" id="menu">
            <ul class="pt-4 text-base text-gray-700 lg:flex lg:justify-between lg:pt-0" style="color: #CAB776;">
                <li class="my-auto">
                    <a class="md:p-4 py-2 block hover:text-white font-body " href="/prestations">PRESTATIONS</a>
                </li>
                <li class="my-auto">
                    <a class="md:p-4 py-2 block hover:text-white font-body" href="/projects">PROJETS</a>
                </li>
                <li class="my-auto">
                    <a class="md:p-4 py-2 block hover:text-white font-body" href="/about">A PROPOS</a>
                </li>
                <li class="my-auto">
                    <a class="md:p-4 py-2 block hover:text-white font-body" href="/contact">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
