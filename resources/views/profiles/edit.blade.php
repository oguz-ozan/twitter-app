<x-app>
    <form action="{{ route('update_profile', $user) }}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- Show Errors --}}
        @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
        @endif

        <div>
            <x-label for="username" :value="__('Username')" />

            <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="$user->username" required autofocus />
        </div>

        <div>
            <x-label for="name" :value="__('Name')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$user->name" required />
        </div>


        <div>
            <x-label for="email" :value="__('Email')" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$user->email" required />
        </div>
        
        <div>
            <x-label for="avatar" :value="__('Avatar')" />

            <x-input id="avatar" class="block mt-1 w-full" type="file" name="avatar" />
        </div>


        <div>
            <x-label for="password" :value="__('Password')" />

            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password"/>
        </div>

        <div>
            <x-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
        </div>


        <div class="flex items-center justify-start mt-4">
            
            <x-button class="ml-4">
                {{ __('Update') }}
            </x-button>
        </div>
    </form>
</x-app>