<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Forum Threads') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach($threads as $thread)
                        <article>
                            <h4>
                                <a href="{{ route('thread.show' , $thread) }}">
                                    {{ $thread->title }}
                                </a>
                            </h4>

                            <div class="body">
                                {{ $thread->body }}
                            </div>
                        </article>

                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
