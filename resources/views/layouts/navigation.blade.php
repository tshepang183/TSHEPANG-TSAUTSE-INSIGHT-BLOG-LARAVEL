<nav x-data="{ open: false }" style="background-color: #8bca8" class="dark:bg-gray-800">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:flex sm:ml-10">
    <button onclick="window.location.href='{{ route('dashboard') }}'" style="background-color: #265828; color: #ffffff; border: none; padding: 8px 16px; border-radius: 4px;" class="text-gray-800 dark:text-gray-200 px-3 py-2 rounded-md text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500 hover:bg-blue-600">
        {{ __('Dashboard') }}
    </button>


           

            
              
                  
                    <x-slot name="content">
                        <button onclick="window.location.href='{{ route('profile.edit') }}'" style="background-color: #265828; color: #ffffff; border: none; padding: 8px 16px; border-radius: 4px;" class="text-gray-800 dark:text-gray-200 px-3 py-2 rounded-md text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500 hover:bg-blue-600">
                            {{ __('Profile') }}
                        </button>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" style="background-color: #265828; color: #ffffff; border: none; padding: 8px 16px; border-radius: 4px;" class="text-gray-800 dark:text-gray-200 px-3 py-2 rounded-md text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500 hover:bg-blue-600">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </x-slot>
                
            
            
                    </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
     

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
            <button onclick="window.location.href='{{ route('profile.edit') }}'" style="background-color: #007bff; color: #ffffff; border: none; padding: 8px 16px; border-radius: 4px;" class="w-full text-left text-sm font-medium hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
    {{ __('Profile') }}
</button>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="background-color: #dc3545; color: #ffffff; border: none; padding: 8px 16px; border-radius: 4px;" class="w-full text-left text-sm font-medium hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
    {{ __('Log Out') }}
</button>

                </form>
            </div>
        </div>
    </div>
</nav>
