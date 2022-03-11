<x-app-layout>
    <div>
        <a href="#" class="flex items-center font-semibold hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2">
                All Ideas
            </span>
        </a>
    </div>

    <div class="idea-container bg-white rounded-xl flex mt-4">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="mx-4 w-full">
                <h4 class="text-xl font-semibold">
                    <a href="" class="hover:underline">
                        A Random Title Can Go Here
                    </a>
                </h4>
                <div class="text-gray-600 mt-3">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe cumque id vero amet, accusantium dolorem numquam reiciendis, necessitatibus distinctio similique commodi natus ut molestias rerum dolor minima adipisci error aliquid laborum cupiditate sunt consequuntur eaque! Praesentium totam, unde, amet, distinctio expedita quia quasi qui fugit quod vitae molestiae? Itaque tempore illum, nemo adipisci expedita exercitationem. Dolor explicabo alias placeat doloribus est magnam impedit? Nihil iure reiciendis, unde quod cum explicabo! Fugiat nostrum, praesentium veniam enim dolores itaque mollitia eveniet, rem similique quam porro omnis repellendus saepe laudantium odit reiciendis nam asperiores in quasi autem impedit quae voluptatem? Sunt, molestiae fugiat!
                </div>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
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
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
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
    </div> <!-- End Idea Container -->

    <div class="buttons-container flex justify-between items-center mt-6">

        <div class="flex items-center space-x-4 ml-6">
            <button type="button"
                    class="flex items-center text-white justify-center w-32 px-6 py-3 h-11 text-xs bg-x-blue font-semibold rounded-xl border border-x-blue
                            transition ease-in duration-200 hover:bg-x-blue-hover">
                    Reply
            </button>
            <button type="button"
                    class="flex items-center justify-center px-6 py-3 w-36 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200
                            transition ease-in duration-200 hover:border-gray-400">
                <span>
                    Set Status
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>

        <div class="flex items-center space-x-3 ml-6">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            <button type="button"
                    class="px-6 py-3 w-32 h-11 text-xs bg-gray-200 font-semibold uppercase rounded-xl border border-gray-200
                            transition ease-in duration-200 hover:border-gray-400">
                    vote
            </button>
        </div>
    </div> <!-- End Buttons Container -->

    <div class="comments-container space-y-6 ml-22 my-8 pt-4 relative">

        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="mx-4 w-full">
                    <h4 class="hidden text-xl font-semibold">
                        <a href="" class="hover:underline">
                            A Random Title Can Go Here
                        </a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias sed ea modi totam recusandae fuga tempore dolores esse magni neque?
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>20 Hours Ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="bg-gray-100 hover:bg-gray-200 rounded-full h-7
                                                transition duration-150 ease-in border pb-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="hidden absolute w-44 font-semibold bg-white shadow-large rounded-xl py-3 text-left ml-6
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
        </div> <!-- End Comment Container -->

        <div class="comment-container is-admin relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="mt-1 text-center text-x-blue text-xxs font-bold uppercase">
                        Admin
                    </div>
                </div>
                <div class="mx-4 w-full">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">
                            Comment Title Can Go Here
                        </a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores vero incidunt dignissimos temporibus illum eligendi adipisci soluta, in molestiae consectetur iure, animi id. Unde provident, esse quibusdam cupiditate dicta molestiae, sit obcaecati libero dolore nobis similique et nihil tenetur expedita, fugit repellendus assumenda recusandae culpa. Et aliquam natus sapiente iste?
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-x-blue">Big Doe</div>
                            <div>&bull;</div>
                            <div>12 Hours Ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="bg-gray-100 hover:bg-gray-200 rounded-full h-7
                                                transition duration-150 ease-in border pb-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="hidden absolute w-44 font-semibold bg-white shadow-large rounded-xl py-3 text-left ml-6
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
        </div> <!-- End Comment Container -->

                <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="mx-4 w-full">
                    <h4 class="hidden text-xl font-semibold">
                        <a href="" class="hover:underline">
                            A Random Title Can Go Here
                        </a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias sed ea modi totam recusandae fuga tempore dolores esse magni neque?
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>14 Hours Ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="bg-gray-100 hover:bg-gray-200 rounded-full h-7
                                                transition duration-150 ease-in border pb-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="hidden absolute w-44 font-semibold bg-white shadow-large rounded-xl py-3 text-left ml-6
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
        </div> <!-- End Comment Container -->

    </div> <!-- Comments Container -->
</x-app-layout>