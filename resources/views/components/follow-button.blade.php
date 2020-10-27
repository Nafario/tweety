@unless (current_user()->is($user))
<form action="/profiles/{{ $user->username }}/follow" method="POST">
    @csrf
    <button type="submit" class="rounded-full border bg-blue-500 py-2 px-4 text-white text-xs mr-2">
        {{ current_user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
    </button>
    <button class=""></button>
</form>
@endunless