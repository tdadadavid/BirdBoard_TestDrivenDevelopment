<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <article>
                        <h4>
                            {{ $thread->title }}
                        </h4>

                        <div class="body">
                            {{ $thread->body }}
                        </div>
                    </article>

                    <hr>

                </div>
            </div>


            @foreach($thread->replies as $reply)
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">

                            <article class="panel-heading">
                                <h4>
                                {{ $reply->owner->name }} said {{ $reply->created_at->diffForHumans() }}..
                                </h4>

                                <div class="body">
                                    {{ $reply->body }}
                                </div>

                            </article>

                            <hr>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
