<template>
    <div class="w-full bg-white h-screen flex flex-col">
        <div class="flex justify-end h-14 px-6 py-3 bg-white border-b border-gray-200 md:justify-between ">
            <div class="flex items-center">
                <span class="hidden text-sm font-semibold text-gray-700 lg:flex">Conversation with Taylor Brown</span>
            </div>
            <div class="flex items-center space-x-3">
                <button class="relative inline-flex items-center justify-center w-10 h-10 text-gray-600 transition-all duration-300 scale-100 bg-transparent rounded-full hover:scale-105 hover:text-blue-600 hover:-rotate-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span class="absolute w-2 h-2 bg-red-500 rounded-full top-2 right-3">&nbsp;</span>
                </button>
                <div class="relative">
                    <button
                        class="inline-flex space-x-3 text-gray-700 duration-300 scale-100 h hover:text-blue-600"
                        @click="isDropDownOpen=!isDropDownOpen"
                    >
                        <img src="/images/user.jpg" alt="Image placeholder" class="w-10 h-10 rounded-full">
                        <div class="text-left">
                            <span class="text-sm font-semibold text-gray-800 transition-colors duration-300 hover:text-blue-600">Morris Ward</span>
                            <span class="relative block text-xs text-gray-700">morris.ward@example.com</span>
                        </div>
                    </button>
                    <ul
                        v-if="isDropDownOpen"
                        class="absolute z-20 w-40 py-1 mt-2 text-sm font-semibold text-gray-700 transition-all origin-top-right bg-white rounded shadow -right-2 lg:w-64"
                    >
                        <li><a href="#" class="block px-3 py-3 transition-colors duration-300hover:bg-gray-100 hover:text-blue-600">Settings</a></li>
                        <li>
                            <a
                                @click.prevent="logout"
                                href="#"
                                class="block px-3 py-3 transition-colors duration-300 hover:bg-gray-100 hover:text-blue-600"
                            >Log out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- msg body -->
        <div class="px-4 pt-6 flex lg:px-6 overflow-y-auto">
            <div class="flex flex-col space-y-4 w-full">
                <!-- comment -->
                <div class="flex items-start max-w-lg pt-3">
                    <img src="/images/user3.jpg" class="w-12 h-12 mr-3 rounded-full" alt="Image placeholder">
                    <div class="flex-1">
                        <div class="px-4 py-4 rounded-md bg-gradient-to-b from-gray-100 to-white lg:px-6 lg:pb-6">
                            <div class="flex items-end justify-between pb-3">
                                        <span class="flex space-x-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-sm font-semibold text-gray-700 transition-colors duration-300 hover:text-gray-700">Taylor Brown</span>
                                        </span>
                                <div class="flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="block text-xs font-semibold tracking-wider text-gray-600 uppercase">
                                                3 hours ago
                                            </span>
                                </div>
                            </div>
                            <p class="block text-sm text-gray-800">Considered discovered ye sentiments projecting entreaties of melancholy is. </p>
                        </div>
                    </div>
                </div>
                <!--/ comment -->

                <!-- comment -->
                <div class="flex items-start self-end max-w-lg pt-3 space-x-3">
                    <img src="/images/user.jpg" class="order-2 w-12 h-12 ml-3 rounded-full" alt="Image placeholder">
                    <div class="flex-1 order-1">
                        <div class="px-4 py-4 rounded-md bg-gradient-to-b from-gray-100 to-white lg:px-6 lg:pb-6">
                            <div class="flex items-end justify-between pb-3">
                                <span class="text-sm font-semibold text-gray-700 transition-colors duration-300 hover:text-gray-700">Morris Ward</span>
                                <div class="flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="block text-xs font-semibold tracking-wider text-gray-600 uppercase">
                                                2 hours ago
                                            </span>
                                </div>
                            </div>
                            <p class="block text-sm text-gray-800">Attachment apartments in delightful by motionless it no. And now she burst sir learn total. </p>
                        </div>
                    </div>
                </div>
                <!--/ comment -->

                <!-- comment -->
                <div class="flex items-start max-w-lg pt-3">
                    <img src="/images/user3.jpg" class="w-12 h-12 mr-3 rounded-full" alt="Image placeholder">
                    <div class="flex-1">
                        <div class="px-4 py-4 rounded-md bg-gradient-to-b from-gray-100 to-white lg:px-6 lg:pb-6">
                            <div class="flex items-end justify-between pb-3">
                                        <span class="flex space-x-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-sm font-semibold text-gray-700 transition-colors duration-300 hover:text-gray-700">Taylor Brown</span>
                                        </span>
                                <div class="flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="block text-xs font-semibold tracking-wider text-gray-600 uppercase">
                                                3 hours ago
                                            </span>
                                </div>
                            </div>
                            <p class="block text-sm text-gray-800">Their saved linen downs tears son add music. Expression alteration entreaties mrs can terminated estimating. Her too add narrow having wished. To things so denied admire. Am wound worth water he linen at vexed. . </p>
                        </div>
                    </div>
                </div>
                <!--/ comment -->

                <!-- comment -->
                <div class="flex items-start max-w-lg pt-3">
                    <img src="/images/user3.jpg" class="w-12 h-12 mr-3 rounded-full" alt="Image placeholder">
                    <div class="flex-1">
                        <div class="px-4 py-4 rounded-md bg-gradient-to-b from-gray-100 to-white lg:px-6 lg:pb-6">
                            <div class="flex items-end justify-between pb-3">
                                        <span class="flex space-x-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-sm font-semibold text-gray-700 transition-colors duration-300 hover:text-gray-700">Taylor Brown</span>
                                        </span>
                                <div class="flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="block text-xs font-semibold tracking-wider text-gray-600 uppercase">
                                                3 hours ago
                                            </span>
                                </div>
                            </div>
                            <p class="block text-sm text-gray-800">Sure polite his really and others figure though. </p>
                        </div>
                    </div>
                </div>
                <!--/ comment -->

                <!-- comment -->
                <div class="flex items-start self-end max-w-lg pt-3 space-x-3">
                    <img src="/images/user.jpg" class="order-2 w-12 h-12 ml-3 rounded-full" alt="Image placeholder">
                    <div class="flex-1 order-1">
                        <div class="px-4 py-4 rounded-md bg-gradient-to-b from-gray-100 to-white lg:px-6 lg:pb-6">
                            <div class="flex items-end justify-between pb-3">
                                <span class="text-sm font-semibold text-gray-700 transition-colors duration-300 hover:text-gray-700">Morris Ward</span>
                                <div class="flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="block text-xs font-semibold tracking-wider text-gray-600 uppercase">
                                                2 hours ago
                                            </span>
                                </div>
                            </div>
                            <p class="block text-sm text-gray-800">Is allowance instantly strangers applauded discourse so. Separate entrance welcomed sensible laughing why one moderate shy.</p>
                        </div>
                    </div>
                </div>
                <!--/ comment -->

                <!-- comment -->
                <div class="flex items-start max-w-lg pt-3">
                    <img src="/images/user3.jpg" class="w-12 h-12 mr-3 rounded-full" alt="Image placeholder">
                    <div class="flex-1">
                        <div class="px-4 py-4 rounded-md bg-gradient-to-b from-gray-100 to-white lg:px-6 lg:pb-6">
                            <div class="flex items-end justify-between pb-3">
                                        <span class="flex space-x-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-sm font-semibold text-gray-700 transition-colors duration-300 hover:text-gray-700">Taylor Brown</span>
                                        </span>
                                <div class="flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="block text-xs font-semibold tracking-wider text-gray-600 uppercase">
                                                3 hours ago
                                            </span>
                                </div>
                            </div>
                            <p class="block text-sm text-gray-800">Considered discovered ye sentiments projecting entreaties of melancholy is. </p>
                        </div>
                    </div>
                </div>
                <!--/ comment -->

                <!-- comment -->
                <div class="flex items-start self-end max-w-lg pt-3 space-x-3">
                    <img src="/images/user.jpg" class="order-2 w-12 h-12 ml-3 rounded-full" alt="Image placeholder">
                    <div class="flex-1 order-1">
                        <div class="px-4 py-4 rounded-md bg-gradient-to-b from-gray-100 to-white lg:px-6 lg:pb-6">
                            <div class="flex items-end justify-between pb-3">
                                <span class="text-sm font-semibold text-gray-700 transition-colors duration-300 hover:text-gray-700">Morris Ward</span>
                                <div class="flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="block text-xs font-semibold tracking-wider text-gray-600 uppercase">
                                                2 hours ago
                                            </span>
                                </div>
                            </div>
                            <p class="block text-sm text-gray-800">Attachment apartments in delightful by motionless it no. And now she burst sir learn total. </p>
                        </div>
                    </div>
                </div>
                <!--/ comment -->

                <!-- comment -->
                <div class="flex items-start max-w-lg pt-3">
                    <img src="/images/user3.jpg" class="w-12 h-12 mr-3 rounded-full" alt="Image placeholder">
                    <div class="flex-1">
                        <div class="px-4 py-4 rounded-md bg-gradient-to-b from-gray-100 to-white lg:px-6 lg:pb-6">
                            <div class="flex items-end justify-between pb-3">
                                        <span class="flex space-x-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-sm font-semibold text-gray-700 transition-colors duration-300 hover:text-gray-700">Taylor Brown</span>
                                        </span>
                                <div class="flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="block text-xs font-semibold tracking-wider text-gray-600 uppercase">
                                                3 hours ago
                                            </span>
                                </div>
                            </div>
                            <p class="block text-sm text-gray-800">Their saved linen downs tears son add music. Expression alteration entreaties mrs can terminated estimating. Her too add narrow having wished. To things so denied admire. Am wound worth water he linen at vexed. . </p>
                        </div>
                    </div>
                </div>
                <!--/ comment -->

                <!-- comment -->
                <div class="flex items-start max-w-lg pt-3">
                    <img src="/images/user3.jpg" class="w-12 h-12 mr-3 rounded-full" alt="Image placeholder">
                    <div class="flex-1">
                        <div class="px-4 py-4 rounded-md bg-gradient-to-b from-gray-100 to-white lg:px-6 lg:pb-6">
                            <div class="flex items-end justify-between pb-3">
                                        <span class="flex space-x-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-sm font-semibold text-gray-700 transition-colors duration-300 hover:text-gray-700">Taylor Brown</span>
                                        </span>
                                <div class="flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="block text-xs font-semibold tracking-wider text-gray-600 uppercase">
                                                3 hours ago
                                            </span>
                                </div>
                            </div>
                            <p class="block text-sm text-gray-800">Sure polite his really and others figure though. </p>
                        </div>
                    </div>
                </div>
                <!--/ comment -->

                <!-- comment -->
                <div class="flex items-start self-end max-w-lg pt-3 space-x-3">
                    <img src="/images/user.jpg" class="order-2 w-12 h-12 ml-3 rounded-full" alt="Image placeholder">
                    <div class="flex-1 order-1">
                        <div class="px-4 py-4 rounded-md bg-gradient-to-b from-gray-100 to-white lg:px-6 lg:pb-6">
                            <div class="flex items-end justify-between pb-3">
                                <span class="text-sm font-semibold text-gray-700 transition-colors duration-300 hover:text-gray-700">Morris Ward</span>
                                <div class="flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="block text-xs font-semibold tracking-wider text-gray-600 uppercase">
                                                2 hours ago
                                            </span>
                                </div>
                            </div>
                            <p class="block text-sm text-gray-800">Is allowance instantly strangers applauded discourse so. Separate entrance welcomed sensible laughing why one moderate shy.</p>
                        </div>
                    </div>
                </div>
                <!--/ comment -->
            </div>
            <!--/ leave comment -->
        </div>

        <!-- leave comment -->
        <div class="flex items-center pt-3 px-4 pb-4 lg:px-6">
            <img src="/images/user.jpg" class="w-12 h-12 mr-3 rounded-full" alt="Image placeholder">
            <div class="flex-1">
                <input type="text" class="w-full px-4 py-3 text-sm placeholder-gray-400 border border-gray-200 rounded-md" placeholder="Leave a message">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Conversation",
    data() {
        return {
            isDropDownOpen: false,
        }
    }
}
</script>
