<div>
    <form wire:submit.prevent="createIdea" action="#" Method="POST" class="space-y-4 px-4 py-6">
        <div>
            <input wire:model.defer="title"
                   type="text" 
                   class="w-full bg-gray-100 rounded-xl placehold-gray-900 px-4 py-2 border-none text-sm 
                        focus:ring-0 focus:border-x-blue/50"
                   placeholder="your idea">
                   @error('title')
                       <p class="text-x-red text-xs mt-1">
                           {{ $message }}
                       </p>
                   @enderror
        </div>
        <div>
            <select wire:model.defer="category" 
                    name="category_add" 
                    id="category_add" 
                    class="w-full rounded-xl px-4 py-2 border-none focus:ring-0 bg-gray-100 text-sm">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <div>
                @error('category')
                    <p class="text-x-red text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
        <div>
            <textarea wire:model.defer="description"
                      name="idea" id="idea" cols="30" rows="4" 
                      class="w-full bg-gray-100 rounded-xl placeholde-gray-900 text-sm px-4 py-2 border-none"
                      placeholder="describe your idea"></textarea>
            @error('description')
                <p class="text-x-red text-xs mt-1">
                    {{ $message }}
                </p>
            @enderror
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
                    Submit 
            </button>
        </div>
        <div>
            @if (session('success_message'))
                <div x-data="{ isVisible: true }"
                     x-init="setTimeout(() => {
                                isVisible = false
                             }, 4000)
                            "
                     x-show="isVisible"
                     x-transition.duration.1000ms
                     class="text-x-blue mt-2">
                    {{ session('success_message') }}
                </div>
            @endif
        </div>
    </form>
</div>
