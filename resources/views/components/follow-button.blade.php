<form action="{{ route('toggle_follow', $user->name) }}" method="POST">
    @csrf
    <button type="submit"> {{ auth()->user()->is_following($user) ? 'Unfollow Me' : 'Follow Me'}}
    </button>
</form>