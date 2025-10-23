<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900">
    <!-- Navigation - Dark Background -->
    <header class="sticky top-0 z-50 bg-gray-900/95 backdrop-blur-md border-b border-gray-800/50">
        <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img src="https://images.unsplash.com/photo-1692561051020-7c3fd4b227f9?w=300&h=300&fit=crop&crop=center"
                        alt="Modern geometric logo" class="h-8 w-auto rounded-lg shadow-lg" />
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" command="show-modal" commandfor="mobile-menu"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-300 transition-colors duration-200 hover:text-indigo-400">
                    <span class="sr-only">Open main menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                        aria-hidden="true" class="size-6">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            </div>
            <div class=" hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="/login"
                    class="text-sm/6 font-semibold text-gray-300 hover:text-indigo-400 transition-colors duration-200">Log
                    in <span aria-hidden="true">&rarr;</span></a>
            </div>
        </nav>
        <el-dialog>
            <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
                <div tabindex="0" class="fixed inset-0 focus:outline-none">
                    <el-dialog-panel
                        class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900/95 backdrop-blur-md p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-800/20 shadow-2xl border-l border-gray-800/30">
                        <div class="flex items-center justify-between">
                            <a href="#" class="-m-1.5 p-1.5">
                                <span class="sr-only">Your Company</span>
                                <img src="https://images.unsplash.com/photo-1692561051020-7c3fd4b227f9?w=300&h=300&fit=crop&crop=center"
                                    alt="Modern geometric logo" class="h-8 w-auto rounded-lg shadow-lg" />
                            </a>
                            <button type="button" command="close" commandfor="mobile-menu"
                                class="-m-2.5 rounded-md p-2.5 text-gray-300 transition-colors duration-200 hover:text-indigo-400">
                                <span class="sr-only">Close menu</span>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    data-slot="icon" aria-hidden="true" class="size-6">
                                    <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-6 flow-root">
                            <div class="-my-6 divide-y divide-gray-800/30">
                                <div class="space-y-2 py-6">
                                    <a href="/"
                                        class="-mx-3 block rounded-xl px-3 py-2 text-base font-medium text-gray-300 hover:bg-indigo-500/10 transition-colors duration-200">Home</a>
                                    <a href="/about"
                                        class="-mx-3 block rounded-xl px-3 py-2 text-base font-medium text-gray-300 hover:bg-indigo-500/10 transition-colors duration-200">About</a>
                                    <a href="/contact"
                                        class="-mx-3 block rounded-xl px-3 py-2 text-base font-medium text-gray-300 hover:bg-indigo-500/10 transition-colors duration-200">Contact</a>
                                </div>
                                <div class="py-6">
                                    <a href="/login"
                                        class="-mx-3 block rounded-xl px-3 py-2.5 text-base font-medium text-gray-300 hover:bg-indigo-500/10 transition-colors duration-200">Log
                                        in</a>
                                </div>
                            </div>
                        </div>
                    </el-dialog-panel>
                </div>
            </dialog>
        </el-dialog>
    </header>

    <!-- Content Area - Clean White Background -->
    <main class="relative pb-12 lg:pb-16 bg-white min-h-[calc(100vh-80px)]">
        <!-- Top decorative background -->
        <div class="absolute inset-x-0 -top-40 -z-10 transform overflow-hidden blur-xl">
            <div class="pointer-events-none absolute left-1/2 -translate-x-1/2 -translate-y-1/2 transform aspect-[1155/678] w-[144.5rem] bg-gradient-to-tr from-indigo-50 via-white to-cyan-50"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>

        <div class="px-6 pt-20 lg:px-8">
            <h1
                class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 text-center mb-12 bg-gradient-to-r from-gray-900 via-indigo-600 to-gray-900 bg-clip-text text-transparent">
                {{ $heading }}
            </h1>
            <div class="mx-auto max-w-7xl">
                {{ $slot }}
            </div>
        </div>

        <!-- Bottom decorative background -->
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform overflow-hidden blur-xl">
            <div class="pointer-events-none absolute left-1/2 translate-x-1/2 -translate-y-1/2 transform aspect-[1155/678] w-[144.5rem] bg-gradient-to-tr from-indigo-50 via-white to-cyan-50"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </main>
</body>

</html>