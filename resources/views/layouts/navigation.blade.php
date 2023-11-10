<nav x-data="{ open: false }" style="background-color: #444; border-bottom: 1px solid #e6e6e6;">
    <!-- Primary Navigation Menu -->
    <div style="max-width: 100%; margin: 0 auto; padding: 1rem; sm:padding: 1.5rem; lg:padding: 2rem;">
        <div style="display: flex; justify-content: space-between; height: 4rem;">
            <div style="display: flex;">
                <!-- Logo -->
                <div style="flex-shrink: 0; display: flex; align-items: center;">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo style="display: block; height: 2.5rem; width: auto; fill: currentColor; color: #666;" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div style="display: none; margin-top: -0.125rem; sm:margin-left: 1.25rem; sm:display: flex;">
                    <a :href="route('dashboard')" :active="request()->routeIs('dashboard')" style="margin: 0 0.75rem;">
                        {{ __('Dashboard') }}
                    </a>
                </div>
                <a href="/dashboard" style=" margin-top: 1rem; padding-left: 3rem; font-size:20px; color:white; text-decoration-line: none;">Dashboard</a>
                <div style="display: none; margin-top: -0.125rem; sm:margin-left: 1.25rem; sm:display: flex;">
                    <!-- <x-nav-link :href="route('post_index')" :active="request()->routeIs('post_index')" style="margin: 0 0.75rem;">
                        {{ __('Post') }}
                    </x-nav-link> -->
                    
                </div>
                <a href="/post" style=" margin-top: 1rem; padding-left: 3rem; font-size:20px; color:white; text-decoration-line: none;">Post</a>
            </div>

            <!-- Settings Dropdown -->
            <div style="display: none; display: flex; align-items: center; sm:margin-left: 1.5rem;">
                <div align="right" width="48">
                    <button style="display: flex; align-items: center; font-size: 0.875rem; font-weight: 500; color: #333; transition: color 0.15s ease-in-out;">
                        <div>{{ Auth::user()->name }}</div>

                        <div style="margin-left: 0.125rem;">
                            <svg style="fill: currentColor; height: 1rem; width: 1rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path style="fill-rule: evenodd;" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>

                    <div >
                        <!-- Authentication -->
                        <!-- <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" style="cursor: pointer; padding: 0.5rem 1rem;">
                                {{ __('Log Out') }}
                            </a>
                        </form> -->
                        <div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="margin-top: 1rem; padding-left: 3rem; font-size: 20px; color: white; text-decoration: none;">Logout</a>
    </form>
</div>

                    </div>
                </div>
            </div>

            <!-- Hamburger -->
            <!-- <div style="margin-right: -0.5rem; display: flex; align-items: center; sm:display: none;">
                <button @click="open = ! open" style="display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem; border-radius: 0.25rem; font-size: 1rem; color: #666; transition: color 0.15s ease-in-out;">
                    <svg style="height: 1.5rem; width: 1.5rem; stroke: currentColor; fill: none; viewBox: 0 0 24 24;">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" style="stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" style="display: none; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div> -->
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" style="display: none; sm:display: block;">
        <div style="padding-top: 0.5rem; padding-bottom: 0.75rem;">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" style="padding: 0.5rem 1rem;">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div style="padding-top: 1rem; padding-bottom: 0.25rem; border-top: 1px solid #e6e6e6;">
            <div style="padding: 1rem;">
                <div style="font-weight: 500; font-size: 1rem; color: #333;">{{ Auth::user()->name }}</div>
                <div style="font-weight: 500; font-size: 0.875rem; color: #666;">{{ Auth::user()->email }}</div>
            </div>

            <div style="margin-top: 0.75rem;">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="/logout" onclick="event.preventDefault(); this.closest('form').submit();" style="cursor: pointer; padding: 0.5rem 1rem;">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>
    </div>
</nav>
