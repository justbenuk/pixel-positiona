@props(['job'])
<x-panel class="flex flex-row">
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="/" class="self-start text-sm text-gray-400">{{$job->employer->name}}</a>
        <a href="{{$job->url}}">
            <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300">{{$job->title}}</h3>
        </a>
        <p class="text-xm text-gray-400 mt-auto">{{$job->schedule}}: From {{$job->salary}}</p>
    </div>
    <div class="">
        @foreach($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</x-panel>
