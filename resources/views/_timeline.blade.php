<div class="border border-gray-300 rounded-lg">
    @forelse ($tweets as $tweet)
<div class="flex p-4 border-b border-b-gray-300">
    <div class="mr-2">
        <a href="{{ $tweet->user->path() }}"><img 
        src={{ $tweet->user->avatar }}
        alt=""
        class="mr-2 rounded-full"
        width="50px"
        height="50px"></a>
    </div>
    <div>
        <h5 class="font-bold mb-4">
            <a href="{{ $tweet->user->path() }}">
                {{ $tweet->user->name }}
            </a>
            <span class="font-italic"> {{ '@' . $tweet->user->username }} </span>
            <p class="float-right">{{ $tweet->user->created_at->diffForHumans() }}</p>
        </h5>
        <p class="text-sm">{!! $tweet->body !!}</p>
    </div>
</div>
@empty
<p>No tweets yet.</p>

@endforelse
</div>
