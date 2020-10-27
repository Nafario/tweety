<div class="border border-blue-400 rounded-lg p-8 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body" class="w-full focus:outline-none" placeholder="What's up doc?" autofocus required></textarea>
        <hr class="my-4">
        <footer class="flex justify-between">
            <img style="width: 50px" class="rounded-full mr-2 items-center"
                src="{{ current_user()->avatar }}" alt="">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-lg py-2 px-4 text-white">Tweet!</button>
        </footer>
    </form>
    @error('body')
    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>