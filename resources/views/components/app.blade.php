<x-master>    
<!-- Page Content -->
<section class="px-8">
    <main class="container mx-auto">
        <div class="lg:flex lg:justify-between">
            <div class="lg:w-32">
                @include('_sidebar-links')
            </div>
            <div class="flex-1 lg:mx-10">
                {{ $slot }}
                
            </div>
            <div class="lg:w-1/6 bg-blue-100 rounded-lg pd-4">
                @include('_friends-list')
            </div>
        </div>
        
    </main>
    </section>
</x-master>
