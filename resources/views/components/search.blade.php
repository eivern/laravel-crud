 <div class="mx-auto max-w-screen-xl px-4 py-8 lg:px-6 lg:py-16">
     <div class="mx-auto max-w-screen-md sm:text-center">

         <form action="/posts">
             @if (request('category'))
                 <input type="hidden" name="category" value="{{ request('category') }}" />
             @endif
             @if (request('author'))
                 <input type="hidden" name="author" value="{{ request('author') }}" />
             @endif
             <div class="mx-auto mb-3 max-w-screen-sm items-center space-y-4 sm:flex sm:space-y-0">
                 <div class="relative w-full">
                     <input
                         class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-3 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500 sm:rounded-none sm:rounded-l-lg"
                         placeholder="Search for article" type="text" id="search" name="search"
                         autocomplete="off">
                 </div>
                 <div>
                     <button type="submit"
                         class="w-full cursor-pointer rounded-lg border border-primary-600 bg-primary-700 px-5 py-3 text-center text-sm font-medium text-white hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:rounded-none sm:rounded-r-lg">Search</button>
                 </div>
             </div>

         </form>
     </div>
 </div>
