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
        <div class="flex flex-1 px-4 py-6 flex-col md:flex-row">
            <div class="flex-none mx-2 md:mx-4">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="mx-2 md:mx-4 w-full">
                <h4 class="text-xl font-semibold mt-2 md:mt-0">
                    <a href="" class="hover:underline">
                        {{ $idea->title }}
                    </a>
                </h4>
                <div class="text-gray-600 mt-3">
                    {{ $idea->description }}
                </div>
                <div class="flex flex-col md:flex-row justify-between md:items-center mt-4">
                    <div class="flex items-center text-xxs font-semibold space-x-2 text-gray-400">
                        <div class="hidden md:block font-bold text-gray-900">{{ $idea->user->name }}</div>
                        <div class="hidden md:block">&bull;</div>
                        <div>{{ $idea->created_at->diffForHumans() }}</div>
                        <div>&bull;</div>
                        <div>{{ $idea->category->show }}</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">Three Comments</div>
                    </div>
                    <div class="flex items-center space-x-2 mt-4 md:mt-0">
                        <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">
                            Open
                        </div>
                        <button x-data="{ isOpen: false }"
                                @click="isOpen = !isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7
                                        transition duration-150 ease-in border pb-2 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                            <ul x-show="isOpen"
                                x-transition.origin.top.left
                                @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="absolute w-44 font-semibold bg-white shadow-large rounded-xl py-3 text-left ml-6
                                       shadow-dialog transition ease-in duration-200
                                       md:ml-8 top-8 md:top-6 right-0 md:left-0 z-10">
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
                    <div class="mt-4 md:mt-0 md:hidden flex items-center">
                        <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                            <div class="text-sm font-bold leading-none">
                                12
                            </div>
                            <div class="text-xxs font-semibold leading-none text-gray-400">
                                Votes 
                            </div>
                        </div>
                        <button class="-mx-5 w-20 h-10 bg-gray-200 text-white border border-gray-200 font-bold text-xxs uppercase rounded-xl hover:border-gray-400
                                        transition duration-200 ease-in px-4 py-3">
                            voted
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Idea Container -->

    <div class="buttons-container flex justify-between items-center mt-6">

        <div class="flex flex-col md:flex-row items-center space-x-4 ml-0 md:ml-6">
            <div x-data="{ isOpen: false }"
                 class="relative">
                <button @click="isOpen= !isOpen"
                        type="button"
                        class="flex items-center text-white justify-center w-32 px-6 py-3 h-11 text-sm bg-x-blue font-semibold rounded-xl border border-x-blue
                                transition ease-in duration-200 hover:bg-x-blue-hover">
                        Reply
                </button>
                <div @click.away="isOpen = false"
                     @keydown.escape.window="isOpen = false"
                     x-cloak
                     x-show="isOpen"
                     x-transition.origin.top.left
                     class="absolute z-10 w-64 md:w-104 mt-2 text-left font-semibold rounded-xl text-sml bg-white shadow-dialog">
                    <form action="#" method="post" class="space-y-4 px-4 py-6">
                        <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                  class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                                  placeholder="Share your thoughts"></textarea>
                        <div class="flex flex-col md:flex-row items-center md:space-x-3">
                            <button type="button"
                                    class="flex items-center text-white justify-center w-full md:w-1/2 px-6 py-3 h-11 text-sm bg-x-blue font-semibold rounded-xl border border-x-blue
                                            transition ease-in duration-200 hover:bg-x-blue-hover">
                                Post Comment    
                            </button>
                            <button type="button"
                                    class="flex items-center justify-center px-6 py-3 w-full md:w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 
                                        transition ease-in duration-200 hover:border-gray-400 mt-2 md:mt-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform -rotate-45 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">
                                    Attach
                                </span>
                            </button>
                        </div>
                    </form>
                </div> <!-- end add reply dialog -->
            </div>
            <div x-data="{ isOpen: false }" 
                 class="relative mt-2 md:mt-0">
                <button @click="isOpen = !isOpen"
                        type="button"
                        class="flex items-center justify-center px-6 py-3 w-36 h-11 text-sm bg-gray-200 font-semibold rounded-xl border border-gray-200
                                transition ease-in duration-200 hover:border-gray-400">
                    <span>
                        Set Status
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="isOpen"
                     x-transition.origin.top.left 
                     x-cloak
                     @click.away="isOpen = false"
                     @keydown.escape.window="isOpen = false"
                     class="absolute z-20 w-64 md:w-76 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form action="#" method="POST" class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked class="bg-gray-200 text-gray-400 border-none focus:ring-0" name="set_status">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-x-purple border-none focus:ring-0" name="set_status">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-x-yellow border-none focus:ring-0" name="set_status">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-x-green border-none focus:ring-0" name="set_status">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-x-red border-none focus:ring-0" name="set_status">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <textarea name="update_comment" id="update_comment" cols="30" rows="3"
                                      class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                                      placeholder="Add an update comment (optional)"></textarea>
                        </div>
                        <div class="flex items-center justify-between space-x-3">
                            <button type="button"
                                    class="flex items-center justify-center px-6 py-3 w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 
                                        transition ease-in duration-200 hover:border-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform -rotate-45 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">
                                    Attach
                                </span>
                            </button>
                            <button type="submit"
                                    class="flex items-center text-white justify-center px-6 py-3 w-1/2 h-11 text-xs bg-x-blue font-semibold rounded-xl border border-x-blue 
                                        transition ease-in duration-200 hover:bg-x-blue-hover">
                                    Update
                            </button>
                        </div>
                        <div>
                            <label class="font-normal inline-flex items-center">
                                <input type="checkbox" name="notify_voters" class="bg-gray-200 rounded-xl text-x-blue" checked>
                                <span class="ml-2">Notify all voters</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div> <!-- end set status -->
        </div>

        <div class="hidden md:flex items-center space-x-3 ml-6">
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

    <div class="comments-container space-y-6 md:ml-22 my-8 pt-4 relative">

        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="md:mx-4 w-full">
                    <h4 class="hidden text-xl font-semibold">
                        <a href="" class="hover:underline">
                            A Random Comment
                        </a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        I think this idea stinks to high heaven!
                    </div>
                    <div class="flex justify-between md:items-center mt-4">
                        <div class="flex items-center text-xxs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">{{ $idea->user->name }}</div>
                            <div>&bull;</div>
                            <div>{{ $idea->created_at->diffForHumans() }}</div>
                        </div>
                        <div x-data="{ isOpen: false }" 
                             class="flex items-center space-x-2 mt-2 md:mt-0">
                            <button @click="isOpen = !isOpen"
                                    class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7
                                                transition duration-150 ease-in border pb-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    x-show="isOpen" 
                                    x-transition.origin.top.left
                                    class="absolute w-44 font-semibold bg-white rounded-xl py-3 text-left ml-6
                                           shadow-dialog transition ease-in duration-200 z-10
                                           md:ml-8 top-8 md:top-6 right-0 md:left-0">
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

        <div class="comment-container is-admin relative bg-white rounded-xl flex mt-4 border border-x-blue">
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