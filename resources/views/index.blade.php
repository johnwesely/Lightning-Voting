<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none focus:ring-0">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="filters" id="filters" class="w-full rounded-xl px-4 py-2 border-none focus:ring-0">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an Idea" class="w-full rounded-xl bg-white px-4 py-2 pl-10 border-none focus:ring-0 placeholder-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div> <!-- End Filters Container -->

    <div class="ideas-container space-y-6 my-6 hover:shadow-card transition ease-in duration-200 cursor-pointer">
        <div class="idea-container bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-grey-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="px-4 py-3 w-20 bg-gray-200 font-bold text-xxs uppercase rounded-xl border border-gray-200 
                                   hover:border-gray-400 transition ease-in duration-200">
                        vote
                    </button>
                </div>
            </div>
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="mx-4 w-full">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">
                            A Random Title Can Go Here
                        </a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe cumque id vero amet, accusantium dolorem numquam reiciendis, necessitatibus distinctio similique commodi natus ut molestias rerum dolor minima adipisci error aliquid laborum cupiditate sunt consequuntur eaque! Praesentium totam, unde, amet, distinctio expedita quia quasi qui fugit quod vitae molestiae? Itaque tempore illum, nemo adipisci expedita exercitationem. Dolor explicabo alias placeat doloribus est magnam impedit? Nihil iure reiciendis, unde quod cum explicabo! Fugiat nostrum, praesentium veniam enim dolores itaque mollitia eveniet, rem similique quam porro omnis repellendus saepe laudantium odit reiciendis nam asperiores in quasi autem impedit quae voluptatem? Sunt, molestiae fugiat!
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 Hours Ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">Three Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">
                                Open
                            </div>
                            <button class="bg-gray-100 hover:bg-gray-200 rounded-full h-7
                                            transition duration-150 ease-in border pb-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" 
                                          stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg> 
                                <ul class="absolute w-44 font-semibold bg-white shadow-large rounded-xl py-3 text-left ml-6
                                           shadow-dialog transition ease-in duration-200">
                                    <li>
                                        <a href="" class="hover:bg-gray-100 px-5 py3 transition ease-in duration-150">
                                            mark as spam
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="hover:bg-gray-100 px-5 py3 transition ease-in duration-150">
                                            delete post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Ideas Container -->
    <div class="ideas-container space-y-6 my-6 hover:shadow-card transition ease-in duration-200 cursor-pointer">
        <div class="idea-container bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-x-blue">12</div>
                    <div class="text-grey-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="bg-x-blue px-4 py-3 w-20 bg- font-bold text-xxs uppercase rounded-xl border border-gray-200 
                                   hover:border-gray-400 transition ease-in duration-200">
                        voted
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">
                            A Random Title Can Go Here
                        </a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe cumque id vero amet, accusantium dolorem numquam reiciendis, necessitatibus distinctio similique commodi natus ut molestias rerum dolor minima adipisci error aliquid laborum cupiditate sunt consequuntur eaque! Praesentium totam, unde, amet, distinctio expedita quia quasi qui fugit quod vitae molestiae? Itaque tempore illum, nemo adipisci expedita exercitationem. Dolor explicabo alias placeat doloribus est magnam impedit? Nihil iure reiciendis, unde quod cum explicabo! Fugiat nostrum, praesentium veniam enim dolores itaque mollitia eveniet, rem similique quam porro omnis repellendus saepe laudantium odit reiciendis nam asperiores in quasi autem impedit quae voluptatem? Sunt, molestiae fugiat!
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 Hours Ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">Three Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-x-yellow text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">
                                in progress 
                            </div>
                            <button class="bg-gray-100 hover:bg-gray-200 rounded-full h-7
                                            transition duration-150 ease-in">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" 
                                          stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg> 
                                <ul class="absolute w-44 font-semibold bg-white shadow-large rounded-xl py-3 text-left ml-6
                                           shadow-dialog transition ease-in duration-200">
                                    <li>
                                        <a href="" class="hover:bg-gray-100 px-5 py3 transition ease-in duration-150">
                                            mark as spam
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="hover:bg-gray-100 px-5 py3 transition ease-in duration-150">
                                            delete post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Ideas Container -->
    <div class="ideas-container space-y-6 my-6 hover:shadow-card transition ease-in duration-200 cursor-pointer">
        <div class="idea-container bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-grey-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="px-4 py-3 w-20 bg-gray-200 font-bold text-xxs uppercase rounded-xl border border-gray-200 
                                   hover:border-gray-400 transition ease-in duration-200">
                        vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">
                            A Random Title Can Go Here
                        </a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe cumque id vero amet, accusantium dolorem numquam reiciendis, necessitatibus distinctio similique commodi natus ut molestias rerum dolor minima adipisci error aliquid laborum cupiditate sunt consequuntur eaque! Praesentium totam, unde, amet, distinctio expedita quia quasi qui fugit quod vitae molestiae? Itaque tempore illum, nemo adipisci expedita exercitationem. Dolor explicabo alias placeat doloribus est magnam impedit? Nihil iure reiciendis, unde quod cum explicabo! Fugiat nostrum, praesentium veniam enim dolores itaque mollitia eveniet, rem similique quam porro omnis repellendus saepe laudantium odit reiciendis nam asperiores in quasi autem impedit quae voluptatem? Sunt, molestiae fugiat!
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 Hours Ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">Three Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-x-red text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">
                                closed 
                            </div>
                            <button class="bg-gray-100 hover:bg-gray-200 rounded-full h-7
                                            transition duration-150 ease-in">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" 
                                          stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg> 
                                <ul class="absolute w-44 font-semibold bg-white shadow-large rounded-xl py-3 text-left ml-6
                                           shadow-dialog transition ease-in duration-200">
                                    <li>
                                        <a href="" class="hover:bg-gray-100 px-5 py3 transition ease-in duration-150">
                                            mark as spam
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="hover:bg-gray-100 px-5 py3 transition ease-in duration-150">
                                            delete post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Ideas Container -->
    <div class="ideas-container space-y-6 my-6 hover:shadow-card transition ease-in duration-200 cursor-pointer">
        <div class="idea-container bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-grey-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="px-4 py-3 w-20 bg-gray-200 font-bold text-xxs uppercase rounded-xl border border-gray-200 
                                   hover:border-gray-400 transition ease-in duration-200">
                        vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">
                            A Random Title Can Go Here
                        </a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe cumque id vero amet, accusantium dolorem numquam reiciendis, necessitatibus distinctio similique commodi natus ut molestias rerum dolor minima adipisci error aliquid laborum cupiditate sunt consequuntur eaque! Praesentium totam, unde, amet, distinctio expedita quia quasi qui fugit quod vitae molestiae? Itaque tempore illum, nemo adipisci expedita exercitationem. Dolor explicabo alias placeat doloribus est magnam impedit? Nihil iure reiciendis, unde quod cum explicabo! Fugiat nostrum, praesentium veniam enim dolores itaque mollitia eveniet, rem similique quam porro omnis repellendus saepe laudantium odit reiciendis nam asperiores in quasi autem impedit quae voluptatem? Sunt, molestiae fugiat!
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 Hours Ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">Three Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-x-green text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">
                                implemented 
                            </div>
                            <button class="bg-gray-100 hover:bg-gray-200 rounded-full h-7
                                            transition duration-150 ease-in">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" 
                                          stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg> 
                                <ul class="absolute w-44 font-semibold bg-white shadow-large rounded-xl py-3 text-left ml-6
                                           shadow-dialog transition ease-in duration-200">
                                    <li>
                                        <a href="" class="hover:bg-gray-100 px-5 py3 transition ease-in duration-150">
                                            mark as spam
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="hover:bg-gray-100 px-5 py3 transition ease-in duration-150">
                                            delete post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Ideas Container -->
</x-app-layout>