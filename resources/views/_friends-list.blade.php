<h3 class="font-bold text-xl mb-4">Following</h3>
    <ul>
        @foreach (auth()->user()->follows as $user)
        <li class="mb-4">
            <div>
                <a href="{{ route('profile', $user->name) }}"
                    class="flex items-center text-sm">
                <img 
                src={{  $user->getAvatarAttribute() }} 
                alt=""
                class="mr-2 rounded-full">
                {{ $user->name }}
                </a>
            </div>
        </li>    
        @endforeach
        
    </ul>