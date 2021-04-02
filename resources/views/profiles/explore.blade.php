<x-app>
    @foreach ($users as $user)
        <a href="{{ $user->path() }}" class="flex items-center">
            <img 
            src="{{ $user->avatar }}" 
            alt="avatar"
            width="60"
            class="mr-4 rounded">
            <div>
                <h4> {{ '@' . $user->username }} </h4>
            </div>
        </a>
    @endforeach

    {{ $users->links() }}
</x-app>