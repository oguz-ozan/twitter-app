<h3 class="font-bold text-xl mb-4">Friends</h3>
    <ul>
        @foreach (range(1,8) as $index)
        <li class="mb-4">
            <div class="flex items-center text-sm">
                <img 
                src="https://i.pravatar.cc/30" 
                alt=""
                class="mr-2 rounded-full">
                Osman Özan
            </div>

        </li>    
        @endforeach
        
    </ul>