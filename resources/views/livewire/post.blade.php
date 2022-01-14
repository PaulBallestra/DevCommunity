<div class="max-w-md mx-auto my-8 border border-black rounded">
    <div class="bg-slate-100 flex pt-4 px-4">
        <div class="w-16 mr-2">
            <img class="rounded-full" src="{{ asset('images/profil.jpg') }}">
        </div>
        <div class="px-2 pt-2 flex-grow">
            <header>
                <div class="flex justify-between">

                    <div class="flex">
                        <a class="text-black no-underline m-auto">
                            <span class="font-normal text-grey"> username </span>
                        </a>
                        <div class="text-xs text-grey flex items-center mx-auto ml-2">
                            <span> {{ $post->created_at }}</span>
                        </div>

                    </div>

                    <!-- USER POST EDIT/DELETE -->
                    <div class="flex">

                        <a href="#" class="block no-underline text-black flex px-2 py-2 items-center hover:bg-slate-200">
                            <img class="h-5 w-5 m-auto" src="{{ asset('images/edit.png') }}">
                        </a>

                        <a href="#" class="block no-underline text-black flex px-2 py-2 items-center hover:bg-slate-200">
                            <img class="h-5 w-5 m-auto" src="{{ asset('images/delete.png') }}">
                        </a>

                    </div>

                </div>
            </header>
            <article class="py-4 text-grey-darkest">
                {{ $post->content }}
            </article>

            <!-- IMAGE POST IF EXISTS -->
            @if($post->image)
                <div>
                    <img src="images/DevCommunity_Logo.png" class="m-auto mb-2">
                </div>
            @endif

            <footer class="border-t border-black text-sm flex">
                <a href="#" class="block no-underline text-black flex px-4 py-2 items-center hover:bg-slate-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-thumbs-up h-6 w-6 mr-1">
                        <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
                    </svg>
                    <span>0</span>
                </a>
                <a id="comment-button" class="block no-underline text-black flex px-4 py-2 items-center hover:bg-slate-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-message-circle h-6 w-6 mr-1">
                        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                    </svg>
                    <span>0 Comments</span>
                </a>
            </footer>
        </div>
    </div>

    <div class="hidden" id="comment-div">

        <!-- COMMENT -->
        <div class="bg-slate-200 p-4 pl-8 flex border-t border-slate-400">
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

        <!-- LIST OF ALL COMMENTS -->
        <div class="bg-slate-200 flex pt-4 px-4 border-t border-slate-400">
            <div class="w-16 mr-2">
                <img class="rounded-full" src="{{ asset('images/profil.jpg') }}">
            </div>
            <div class="px-2 pt-2 flex-grow">
                <header>
                    <div class="flex">

                        <a class="text-black no-underline">
                            <span class="font-normal text-grey m-auto">@username</span>
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
                    <a href="#" class="block no-underline text-black flex px-4 py-2 items-center hover:bg-slate-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-thumbs-up h-6 w-6 mr-1">
                            <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
                        </svg>
                        <span>14</span>
                    </a>
                </footer>
            </div>
        </div>
    </div>
</div>
