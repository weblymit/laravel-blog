<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Blog') }}
    </h2>
  </x-slot>
  <section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
      @foreach($posts as $post)
        <div class="-my-8 divide-y-2 divide-gray-100">
          <div class="py-8 flex flex-wrap md:flex-nowrap">
            <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
              <span class="font-semibold title-font text-gray-700">{{ $post->category->name }}</span>
              <span
                class="mt-1 text-gray-500 text-sm">{{ $post -> created_at->format('d M Y') }}</span>
            </div>
            <div class="md:flex-grow">
              <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{ $post->title }}</h2>
              <p class="leading-relaxed">
                {{ Str::limit($post->content , 200, '...') }} </p>
              <p>by <span class="font-bold text-indigo-800">{{ $post->user->name }}</span></p>
              <a class="text-indigo-500 inline-flex items-center mt-4" href="{{ route('posts.show', $post) }}">Voir plus
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </section>
</x-app-layout>
