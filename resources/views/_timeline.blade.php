@foreach ($tweets as $tweet)
<div class="flex p-4 border-b border-b-gray-300">
    <div class="mr-2">
        <img 
        src={{ $tweet->user->getAvatarAttribute() }}
        alt=""
        class="mr-2 rounded-full">
    </div>
    <div>
        <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
        <p class="text-sm">{!! $tweet->body !!}</p>
    </div>
</div>
@endforeach
