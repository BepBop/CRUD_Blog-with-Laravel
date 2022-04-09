<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    {{--<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>--}}

    <div style="display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-size: x-large;
    background: white;
    font-family:'JetBrains Mono Medium',monospace">
        <?php foreach ($blog as $post) : ?>
        <article style="width: 50vw; height: auto;">
            <div style="font-weight: bold;margin: 2rem 2rem;font-size: xx-large;">
                <a href="/dashboard/{{ $post->id }}">{{ $post->title }}</a>
            </div>
            <div style="margin-bottom: 2rem;
    padding-bottom: 2rem;
    border-bottom: 2px solid #b2b2b2;">{{$post->excerpt}}</div>
        </article>
        <?php endforeach ?>
        <div style="margin-top: 2rem;
    padding-bottom: 2rem;"><a href="/dashboard/add">Write a new Post</a></div>
    </div>


</x-app-layout>

