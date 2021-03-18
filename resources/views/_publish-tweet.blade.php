<div class="border border-blue-400 rounded-lg p-8 mb-8">
    <form action="/tweets" method="POST">
        @csrf

        <textarea 
        class="w-full"
        name="body" 
        placeholder="What's up doc?"
        required></textarea>
        <hr class="my-4">
        <div class="flex justify-between">
            <img 
            src={{ auth()->user()->getAvatarAttribute() }} 
            alt=""
            class="mr-2 rounded-full">
            <button class="bg-blue-500 rounded-lg shadow py-4 px-2 text-white" 
            type="submit">Tweet!
            </button>
        </div>
</form>   
</div>