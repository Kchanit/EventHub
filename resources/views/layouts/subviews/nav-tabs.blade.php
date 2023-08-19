@can('update', $event)
    <!-- Nav -->
    <nav class="sticky z-10 -top-px bg-white text-sm font-medium text-black ring-1 ring-gray-900 ring-opacity-5 border-t shadow-sm shadow-gray-100 pt-6 md:pb-6 -mt-px dark:bg-slate-900 dark:border-gray-800 dark:shadow-slate-700/[.7]"
        aria-label="Jump links">
        <div
            class="max-w-7xl snap-x w-full flex items-center overflow-x-auto scrollbar-x px-4 sm:px-6 lg:px-8 pb-4 md:pb-0 mx-auto dark:scrollbar-x">
            <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last-pr-0">
                <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500"
                    href="{{ route('events.my-events') }}">My Events</a>
            </div>
            <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last:pr-0">
                <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500"
                    href="{{ route('events.members', $event) }}">Members</a>
            </div>
            <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last:pr-0">
                <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500"
                    href="{{ route('events.attendees', $event) }}">Attendees</a>
            </div>
            <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last:pr-0">
                <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500"
                    href="{{ route('events.budgets', $event) }}">Budget</a>
            </div>
            <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last:pr-0">
                <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500"
                    href="{{ route('events.tasks', $event) }}">Tasks</a>
            </div>
            <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last:pr-0">
                <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500"
                    href="{{ route('events.schedules', $event) }}">Schedule</a>
            </div>

        </div>
    </nav>
    <!-- End Nav -->
@endcan
