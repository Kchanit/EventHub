@extends('layouts.main')

@section('content')

    <div>
        <div class="flex items-center justify-between">
            <div>

                <h1 class="text-2xl">
                    Attended Events
                </h1>
                <p class="text-sm text-gray-500">
                    A look back at your event history
                </p>
            </div>
        </div>

        <!-- component -->
        <!-- Card List Section -->
        <section x-data="xData()" class="bg-gray-100 dark:bg-gray-100 py-10 px-12">
            <!-- Card Grid -->
            <div
                class="round-xl grid grid-flow-row gap-8 text-neutral-600 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
                <template x-for="post in posts">
                    <!-- Card Item -->
                    <div class=" rounded-xl shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-150 hover:-translate-y-1"
                        x-for="(post, index) in posts">
                        <!-- Clickable Area -->
                        <a _href="link" class="cursor-pointer ">
                            <figure class="group relative">
                                <span
                                    class="z-10 opacity-0 transition duration-300 group-hover:opacity-100 group-hover:ease-in-out absolute top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2 pr-10 pl-10 pt-4 pb-4 text-center text-black bg-opacity-90 bg-white  dark:text-white dark:bg-opacity-95  dark:bg-gray-800  rounded-3xl">
                                    View Certificate
                                </span>

                                <!-- Image -->
                                <img :src="post.image + '?auto=format&fit=crop&w=400&q=50'"
                                    class="rounded-t-xl h-72 w-full object-cover group-hover:opacity-70 z-0" />
                                <div class="p-4">
                                    <!-- Date -->
                                    <span
                                        class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500"
                                        x-text="post.date">
                                        <!-- Post Date -->
                                    </span>
                                    <!-- Title -->
                                    <p class="text-lg mb-4 font-bold leading-relaxed text-gray-800 dark:text-gray-300"
                                        x-text="post.title">
                                        <!-- Post Title -->
                                    </p>
                                    {{-- <div class="max-h-20 overflow-hidden">
                                        <!-- Description -->
                                        <small class="leading-3 text-gray-500 dark:text-gray-400 overflow-hidden"
                                            x-text="post.description">
                                            <!-- Post Description -->
                                        </small>
                                    </div> --}}
                                </div>
                            </figure>
                        </a>
                    </div>
                </template>
            </div>
        </section>

        <script>
            function xData() {
                /**
                 * Shuffle an array
                 * @param {Array} array
                 * @source https://stackoverflow.com/a/2450976/6940144
                 */
                function shuffle(array) {
                    let currentIndex = array.length,
                        randomIndex;

                    // While there remain elements to shuffle.
                    while (currentIndex != 0) {
                        // Pick a remaining element.
                        randomIndex = Math.floor(Math.random() * currentIndex);
                        currentIndex--;

                        // And swap it with the current element.
                        [array[currentIndex], array[randomIndex]] = [
                            array[randomIndex],
                            array[currentIndex],
                        ];
                    }

                    return array;
                }

                const posts = [{
                        image: "https://images.unsplash.com/photo-1495474472287-4d71bcdd2085",
                        title: "5 Easy Tips That Will Make Your Latte Art Flourish",
                        date: "Some day",
                        description: "Latte art is quite often the most attractive thing for a new barista, and latte art is an excellent gateway to the exciting world of coffee. Latte art easy to start with, but to master latte art patterns, you need a lot practice and determination. Here are my tips that helped me to improve my latte art a few years ago! Latte art is quite often the most attractive thing for a new barista, and latte art is an excellent gateway to the exciting world of coffee. Latte art easy to start with, but to master latte art patterns, you need a lot practice and determination. Here are my tips that helped me to improve my latte art a few years ago! ",
                    },
                    {
                        image: "https://images.unsplash.com/photo-1512034400317-de97d7d6c3ed",
                        title: "Coffee Roasting Basics: Developing Flavour by Roasting",
                        date: "Some day",
                        description: "Caffé latte and flat white are definitely the most ordered espresso based drinks in cafés around the world but what are they really? Have you ever wondered the difference between caffé latte vs. flat white? Let's see what makes caffé latte and flat white different from each other!",
                    },
                    {
                        image: "https://images.unsplash.com/photo-1445077100181-a33e9ac94db0",
                        title: "Latte vs. Flat White - What is the Difference?",
                        date: "Some day",
                        description: "I bet roasting is the thing that every barista wants to know about! We can develop flavour by roasting coffee. How can we achieve the best tasting coffee? What actually happens when roasting?",
                    },
                    {
                        image: "https://images.unsplash.com/photo-1459257868276-5e65389e2722",
                        title: "Creating the Perfect Espresso Recipe",
                        date: "Some day",
                        description: "Espresso recipes are important in cafés in terms of consistency and flavour. How and why are the espresso recipes made and what are the things you should consider when making a recipe for espresso? Let’s dig deeper into the world of espresso!",
                    },
                ];

                return {
                    posts: [
                        ...shuffle(posts),
                        ...shuffle(posts),
                    ],
                };
            }
        </script>

    </div>
@endsection
