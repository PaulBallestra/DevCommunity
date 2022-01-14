<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dev Community - Sign Up</title>

    <!-- TAILWIND LINK -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles
</head>
<body class="antialiased">

@livewire('header')

<h1 class="text-center text-bold"> TIMELINE </h1>

<!-- NEW POST -->
<div class="bg-white max-w-md mx-auto my-8 border border-black rounded">

    <div class="bg-grey-lightest p-4 pl-8 flex border-t border-black-lighter">
        <div class="w-12 mr-2 flex-no-shrink">
            <img class="rounded-full" src="{{ asset('images/profil.jpg') }}">
        </div>
        <div class="flex-grow bg-grey-lighter px-4 py-0 pl-8">
            <textarea class="w-full border border-black rounded"></textarea>
            <div class="flex justify-end items-center mt-2">
                <button class="p-2 text-black leading-none rounded border border-transparent hover:border-black mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-image">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <polyline points="21 15 16 10 5 21"></polyline>
                    </svg>
                </button>
                <button class="py-2 px-4 bg-white text-black border border-black rounded rounded-full hover:bg-black hover:text-white">
                    Post
                </button>
            </div>
        </div>
    </div>
</div>

<!-- POST -->
<div class="max-w-md mx-auto my-8 border border-black rounded">
    <div class="bg-slate-100 flex pt-4 px-4">
        <div class="w-16 mr-2">
            <img class="rounded-full" src="{{ asset('images/profil.jpg') }}">
        </div>
        <div class="px-2 pt-2 flex-grow">
            <header>
                <div class="flex">

                    <a class="text-black no-underline">
                        <span class="font-normal text-grey m-auto">@rathes</span>
                    </a>
                    <div class="text-xs text-grey flex items-center my-auto ml-3">
                        <span>12/11/2022</span>
                    </div>

                </div>
            </header>
            <article class="py-4 text-grey-darkest">
                Lorem ipsum sit dolor et amet et cetera og quandum morales.
            </article>
            <footer class="border-t border-black text-sm flex">
                <a href="#" class="block no-underline text-black flex px-4 py-2 items-center hover:bg-slate-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-thumbs-up h-6 w-6 mr-1">
                        <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
                    </svg>
                    <span>14</span>
                </a>
                <a id="comment-button" class="block no-underline text-black flex px-4 py-2 items-center hover:bg-slate-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-message-circle h-6 w-6 mr-1">
                        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                    </svg>
                    <span>Comment</span>
                </a>
            </footer>
        </div>
    </div>

    <!-- COMMENT -->
    <div class="hidden bg-slate-200 p-4 pl-8 flex border-t border-slate-400" id="comment-div">
        <div class="w-12 mr-2 flex-no-shrink">
            <img class="rounded-full" src="{{ asset('images/profil.jpg') }}">
        </div>
        <div class="flex-grow bg-grey-lighter px-4 py-0 pl-8">
            <textarea class="w-full border border-black rounded"></textarea>
            <div class="flex justify-end items-center mt-2">
                <button class="py-2 px-4 bg-white text-black border border-black rounded rounded-full hover:bg-black hover:text-white">
                    Comment
                </button>
            </div>
        </div>
    </div>

</div>

<script src="{{ asset('js/app.js') }}" defer></script>

@livewireScripts
</body>
</html>
