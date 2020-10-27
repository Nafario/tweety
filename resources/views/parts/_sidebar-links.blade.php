<ul>
    <li>
        <a href="{{ route('home') }}" class="font-bold py-2 px-4 text-lg mb-1 block rounded-full hover:bg-blue-200 hover:text-blue-600">
        Home
        </a>
    </li>
    <li>
        <a href="/explore" class="font-bold py-2 px-4 mb-1 text-lg block rounded-full hover:bg-blue-200 hover:text-blue-600">
            Explore
        </a>
    </li>
    <li>
        <a href="#" class="font-bold py-2 px-4 text-lg mb-1 block rounded-full hover:bg-blue-200 hover:text-blue-600">
            Notifications
        </a>
    </li>
    <li>
        <a href="#" class="font-bold py-2 px-4 text-lg mb-1 block rounded-full hover:bg-blue-200 hover:text-blue-600">
            Messages
        </a>
    </li>
    <li>
        <a href="#" class="font-bold py-2 px-4 text-lg mb-1 block rounded-full hover:bg-blue-200 hover:text-blue-600">
            Bookmarks
        </a>
    </li>
    <li>
        <a href="#" class="font-bold py-2 px-4 text-lg mb-1 block rounded-full hover:bg-blue-200 hover:text-blue-600">
            Lists
        </a>
    </li>
    <li>
        <a href="{{ route('profile', auth()->user()->username) }}" class="font-bold py-2 px-4 text-lg mb-1 block rounded-full hover:bg-blue-200 hover:text-blue-600">
            Profile
        </a>
    </li>
    <li>
        <form method="POST" action="/logout">
            @csrf
            <button class="font-bold py-2 px-4 text-lg mb-1 block rounded-full hover:bg-blue-200 hover:text-blue-600">Logout</button>
        </form>
    </li>
</ul>