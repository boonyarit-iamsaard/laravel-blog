<header class="fixed flex h-16 w-full items-center border-b border-b-slate-100 bg-white">
    <div class="container flex items-center justify-between">
        <a href="{{ route('home') }}"
           class="rounded p-2 text-2xl font-medium leading-none text-slate-500 outline-none ring-slate-200 transition-colors duration-300 ease-in-out hover:bg-slate-100 focus:ring-2 focus:ring-offset-2">
            💻
        </a>
        <div class="flex items-center gap-2">
            @auth
                <a href="{{ route('filament.pages.dashboard') }}"
                   class="rounded px-4 py-2 font-medium text-slate-500 outline-none ring-slate-200 transition-colors duration-300 ease-in-out hover:bg-slate-100 focus:ring-2 focus:ring-offset-2">
                    Admin
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                        this.closest('form').submit();"
                       class="rounded px-4 py-2 font-medium text-slate-500 outline-none ring-slate-200 transition-colors duration-300 ease-in-out hover:bg-slate-100 focus:ring-2 focus:ring-offset-2">
                        Log Out
                    </a>
                </form>
            @else
                <a href="{{ route('login') }}"
                   class="rounded px-4 py-2 font-medium text-slate-500 outline-none ring-slate-200 transition-colors duration-300 ease-in-out hover:bg-slate-100 focus:ring-2 focus:ring-offset-2">
                    Sign In
                </a>
                <a href="{{ route('register') }}"
                   class="rounded px-4 py-2 font-medium text-slate-500 outline-none ring-slate-200 transition-colors duration-300 ease-in-out hover:bg-slate-100 focus:ring-2 focus:ring-offset-2">
                    Register
                </a>
            @endauth
        </div>
    </div>
</header>
