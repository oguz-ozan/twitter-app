<x-app-layout>
    <div class="lg:flex lg:justify-between">
        <div class="lg:w-32">
            @include('_sidebar-links')
        </div>
        <div class="flex-1 lg:mx-10">
            @include('_publish-tweet')
            <div class="border border-gray-300 rounded-lg">
            @include('_timeline')
            </div>
                
        </div>
        <div class="lg:w-1/6 bg-blue-100 rounded-lg pd-4">
            @include('_friends-list')
        </div>
    </div>
</x-app-layout>
