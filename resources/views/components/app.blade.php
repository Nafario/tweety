<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                @auth
                <div class="lg:w-1/6" style="max-width: 250px">
                    @include('parts._sidebar-links')
                </div>
                @endauth
                <div class="lg:flex-1 lg:mx-10" style="max-width: 760px;">
                    {{ $slot }}
                </div>
                @auth
                <div class="lg:w-1/6">
                    @include('parts._friend-list')
                </div>
                @endauth
            </div>
        </main>
    </section>
</x-master>