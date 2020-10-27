<div class="flex p-4 border-b border-gray-400">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user->username) }}">
            <img style="width: 40px" class="rounded-full mr-2" src="{{ $tweet->user->avatar }}" alt="">
        </a>
    </div>
    <div>
        <h5 class="font-bold mb-4">
            <a href="{{ route('profile', $tweet->user->username) }}">
                {{ $tweet->user->name }}
            </a></h5>
        <p class="text-sm">
            {{ $tweet->body }}
        </p>
        <x-like-button :tweet="$tweet"></x-like-button>
    </div>
</div>