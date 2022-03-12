<x-app-layout>
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none focus:ring-0">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select name="filters" id="filters" class="w-full rounded-xl px-4 py-2 border-none focus:ring-0">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>
        <div class="w-full md:w-2/3 relative">
            <input type="search" placeholder="Find an Idea" class="w-full rounded-xl bg-white px-4 py-2 pl-10 border-none focus:ring-0 placeholder-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div> <!-- End Filters Container -->

    <div class="ideas-container space-y-6 my-6 ">
        @foreach($ideas as $idea)
        <div x-data
             @click="const target = $event.target.tagName.toLowerCase()
                const ignores = ['button', 'svg', 'path', 'anchor']

                if (! ignores.includes(target)) {
                    $event.target.closest('.idea-container').querySelector('.idea-link').click()
                }
             "  
             class="idea-container bg-white rounded-xl flex hover:shadow-card transition ease-in duration-200 cursor-pointer">
            <div class="hidden md:block border-r border-gray-100 px-5 py-8">
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
            <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
                <div class="flex-none mx-2 md:mx-0">
                    <a href="#" class="flex-none">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="flex flex-col justify-between mx-2 md:mx-4 w-full">
                    <h4 class="text-xl mt-2 md:mt-0 font-semibold">
                        <a href="{{ route('idea.show', $idea->slug) }}" class="idea-link hover:underline">
                            {{  $idea->title }}
                        </a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        {{ $idea->description }}
                    </div>
                    <div class="flex flex-col md:flex-row justify-between md:items-center mt-4">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>{{ $idea->created_at->diffForHumans() }}</div>
                            <div>&bull;</div>
                            <div>{{ $idea->category->name }}</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">Three Comments</div>
                        </div>
                        <div class="flex items-center space-x-2 mt-4 md:mt-0">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">
                                Open
                            </div>
                            <button class="bg-gray-100 hover:bg-gray-200 rounded-full h-7
                                            transition duration-150 ease-in border pb-2 px-4 relative"
                                    x-data="{ isOpen: false }"
                                    @click="isOpen = !isOpen">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" 
                                          stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg> 
                                <ul x-cloak
                                    x-show="isOpen"
                                    x-transition.origin.top.left.duration.500ms
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 font-semibold bg-white rounded-xl py-3 text-left 
                                           shadow-dialog transition ease-in duration-200
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
        </div>
        @endforeach 
    </div> <!-- End Ideas Container -->

    <div class="my-8">
        {{ $ideas->links() }}
    </div>
</x-app-layout>