@if (current_user()->isNot($user))   
<form action="{{ route('toggle_follow', $user->username) }}" method="POST">
    @csrf
    <button type="submit"
    class="bg-blue-500 rounded-full shadow py-4 px-2 text-white text-xs"
    > {{ current_user()->is_following($user) ? 'Unfollow Me' : 'Follow Me'}}
    </button>
</form>
@endif
