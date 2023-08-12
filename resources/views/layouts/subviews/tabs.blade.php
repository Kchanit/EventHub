<div class="">
    @can('update', $event)
        <div class="sm:hidden">
            <label for="Tab" class="sr-only">Tab</label>

            <select id="Tab" class="w-full rounded-md border-gray-200">
                <option>Settings</option>
                <option>Messages</option>
                <option>Archive</option>
                <option select>Notifications</option>
            </select>
        </div>

        <div class="hidden sm:block">
            <nav class="flex gap-6" aria-label="Tabs">
                <a href="{{ route('events.members') }}"
                    class="shrink-0 rounded-lg p-2 text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                    Members
                </a>

                <a href="{{ route('events.budgets') }}"
                    class="shrink-0 rounded-lg p-2 text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                    Budget
                </a>

                <a href="#"
                    class="shrink-0 rounded-lg p-2 text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                    Schedule
                </a>

                <a href="#"
                    class="shrink-0 rounded-lg p-2 text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                    Tasks
                </a>

                <a href="#"
                    class="shrink-0 rounded-lg p-2 text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                    Attendees
                </a>

                <a href="#" class="shrink-0 rounded-lg bg-gray-100 p-2 text-sm font-medium text-gray-700"
                    aria-current="page">
                    Summary
                </a>
            </nav>
        </div>
    @endcan
</div>
