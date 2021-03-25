<div class="border border-gray-300 rounded-lg">
    @forelse ($tweets as $tweet)
<div class="flex p-4 border-b border-b-gray-300">
    <div class="mr-2">
        <a href="{{ current_user()->path() }}"><img 
        src={{ $tweet->user->getAvatarAttribute() }}
        alt=""
        class="mr-2 rounded-full"></a>
    </div>
    <div>
        <h5 class="font-bold mb-4">
            <a href="{{ current_user()->path() }}">
                {{ $tweet->user->name }}
            </a>
            </h5>
        <p class="text-sm">{!! $tweet->body !!}</p>
    </div>
</div>
@empty
<p>No tweets yet.</p>

@endforelse
</div>
