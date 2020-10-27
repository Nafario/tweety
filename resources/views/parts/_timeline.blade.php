<div class="border border-gray-400 rounded-lg mb-6">
    @forelse ($tweets as $tweet)
    @include('parts._tweet')
    @empty
    <p class="p-4">No Tweets yet</p>
    @endforelse
</div>
<div class="mt-4">

    {{ $tweets->links() }}
</div>