<x-app-layout>
    
    
    <div class="flex justify-between items-center relative mb-6">
       <div>
            <h2 class="font-bold text-2xl mb-2">{{ $user->name }}</h2>
            <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
       </div>
       <div>
        <a href="" class="rounded-full shadow py-4 px-2 text-black text-xs">Edit Profile</a>
        <a href="" class="bg-blue-500 rounded-full shadow py-4 px-2 text-white text-xs">Follow Me</a>
       </div>
    </div>


    <p class="text-sm">
        Description goes here...
    </p>

    <img 
        src={{ $user->getAvatarAttribute() }}
        alt=""
        class="mr-2 rounded-full absolute"
        style="width: 100px; left: calc(50% - 75px); top:3%">

       

    @include('_timeline', [
        'tweets' => $user->tweets
    ])
</x-app-layout>
