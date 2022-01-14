<div>

    @foreach ($posts as $post)

        <!-- Appel du component post -->
        <livewire:post :post="$post" :key="$post->id" />

    @endforeach

</div>
