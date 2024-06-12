<!-- resources/views/layouts/navigation.blade.php -->
<div class="bg-gray-800 shadow-lg">
    <div class="container mx-auto flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8 text-white">
        <div>
            <div id="phTime" class="text-sm font-medium">
                <span id="phHours"></span>:<span id="phMinutes"></span>:<span id="phSeconds"></span> <span id="phAMPM"></span>
            </div>
            <div id="phDate" class="text-sm text-gray-400"></div>
        </div>

        <div class="hidden sm:flex sm:items-center sm:ml-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="flex items-center text-sm font-medium text-white hover:text-gray-300 focus:outline-none focus:text-gray-300 transition duration-150 ease-in-out">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</div>

<script>
    function updateTime() {
        const now = new Date();
        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const seconds = now.getSeconds().toString().padStart(2, '0');
        const ampm = hours >= 12 ? 'PM' : 'AM';

        document.getElementById('phHours').textContent = hours % 12 || 12;
        document.getElementById('phMinutes').textContent = minutes;
        document.getElementById('phSeconds').textContent = seconds;
        document.getElementById('phAMPM').textContent = ampm;

        const options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        const date = now.toLocaleDateString(undefined, options);
        document.getElementById('phDate').textContent = date;
    }

    updateTime();
    setInterval(updateTime, 1000);
</script>
