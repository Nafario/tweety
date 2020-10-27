<x-app>
    <div>
        @foreach ($users as $user)
        <a href="{{ route('profile', $user->username) }}" class="flex items-center mb-5">
            <img class="mr-4" src="{{ $user->avatar }}" alt="" width="60px">
            <div>
                <h4 class="font-bold">{{'@'. $user->username }}</h4>
            </div>
        </a>
        {{ $users->links() }}
        @endforeach
    </div>
</x-app>