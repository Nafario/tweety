<div class="bg-blue-100 border border-gray-300 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @forelse (current_user()->follows as $user)

        <li class="mb-4">
            <div>
                <a class="flex items-center text-sm" href="{{ route('profile', $user) }}">
                    <img class="rounded-full mr-2"
                        src="{{ $user->avatar }}" alt="" width="40px">
                    {{ $user->name }}
                </a>
            </div>
        </li>
        @empty
        <p>No friends yet</p>
        @endforelse
    </ul>
    
</div>