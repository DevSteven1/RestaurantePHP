<nav class="fixed top-0 left-0 w-20 h-full border-r bg-white space-y-8">
        <div class="flex flex-col h-full">
            <div class="h-20 flex items-center justify-center px-8">
                <a href="javascript:void(0)" class="flex-none">
                    <img src="https://floatui.com/logo-letter.png" width="35" class="mx-auto" />
                </a>
            </div>
            <div class="flex-1 flex flex-col h-full">
                <ul class="px-4 text-sm font-medium flex-1">
                    <template x-for="(item, index) in navigation" :key="index">
                        <li>
                            <a :href="item.href" class="relative flex items-center justify-center gap-x-2 text-gray-600 p-2 rounded-lg hover:bg-gray-50 active:bg-gray-100 duration-150 group">
                                <div x-html="item.icon" class="text-gray-500"></div>
                                <span x-text="item.name" class="absolute left-14 p-1 px-1.5 rounded-md whitespace-nowrap text-xs text-white bg-gray-800 hidden group-hover:inline-block group-focus:hidden duration-150"></span>
                            </a>
                        </li>
                    </template>
                </ul>
                <div>
                    <ul class="px-4 pb-4 text-sm font-medium">
                        <template x-for="(item, index) in navsFooter" :key="index">
                            <li>
                                <a :href="item.href" class="relative flex items-center justify-center gap-x-2 text-gray-600 p-2 rounded-lg hover:bg-gray-50 active:bg-gray-100 duration-150 group">
                                    <div x-html="item.icon" class="text-gray-500"></div>
                                    <span x-text="item.name" class="absolute left-14 p-1 px-1.5 rounded-md whitespace-nowrap text-xs text-white bg-gray-800 hidden group-hover:inline-block group-focus:hidden duration-150"></span>
                                </a>
                            </li>
                        </template>
                    </ul>
                    <div class="relative py-4 px-4 border-t" @click.outside="isProfileActive = false">
                        <button @click="isProfileActive = !isProfileActive" class="w-12 h-12 flex items-center gap-x-4 cursor-pointer rounded-full ring-offset-2 ring-gray-800 focus:ring-2 duration-150">
                            <img src="https://randomuser.me/api/portraits/women/79.jpg" class="w-12 h-12 rounded-full" />
                        </button>
                        <template x-if="isProfileActive">
                            <div class="absolute bottom-4 left-20 w-64 rounded-lg bg-white shadow-md border text-sm text-gray-600">
                                <div class="p-2">
                                    <span class="block text-gray-500/80 p-2">vienna@gmail.com</span>
                                    <a href="javascript:void(0)" class="block w-full p-2 text-left rounded-md hover:bg-gray-50 active:bg-gray-100 duration-150">
                                        Status
                                    </a>
                                    <div class="relative rounded-md hover:bg-gray-50 active:bg-gray-100 duration-150">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 absolute right-1 inset-y-0 my-auto pointer-events-none">
                                            <path fillRule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clipRule="evenodd" />
                                        </svg>
                                        <select class="w-full cursor-pointer appearance-none bg-transparent p-2 outline-none">
                                            <option disabled selected>Theme</option>
                                            <option>Dark</option>
                                            <option>Light</option>
                                        </select>
                                    </div>
                                    <button class="block w-full p-2 text-left rounded-md hover:bg-gray-50 active:bg-gray-100 duration-150">
                                        Logout
                                    </button>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>