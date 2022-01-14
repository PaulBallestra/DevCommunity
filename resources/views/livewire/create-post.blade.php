<!-- NEW POST -->
<div class="bg-white max-w-md mx-auto my-8 border border-black rounded">

    <div class="bg-grey-lightest p-4 pl-8 flex border-t border-black-lighter">
        <div class="w-12 mr-2 flex-no-shrink">
            <img class="rounded-full" src="{{ asset('images/profil.jpg') }}">
        </div>
        <form method="POST" wire:submit.prevent="createPost" class="flex-grow bg-grey-lighter px-4 py-0 pl-8">
            @csrf
            <textarea id="content" wire:model="content" class="w-full border border-black rounded"></textarea>
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
                <button type="submit" class="py-2 px-4 bg-white text-black border border-black rounded rounded-full hover:bg-black hover:text-white">
                    Post
                </button>
            </div>
        </form>
    </div>
</div>
