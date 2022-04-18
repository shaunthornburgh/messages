<template>
    <main class="flex flex-col h-screen max-h-screen overflow-hidden bg-gray-100">
        <div class="flex flex-row flex-1 w-full bg-white">
            <div class="w-16 pb-12 bg-gray-900 border-r border-gray-700 lg:w-64">
                <div class="flex items-center w-16 px-4 py-1 border-b border-r border-gray-700 lg:w-64 lg:px-6 h-14">
                    <span class="hidden text-sm font-semibold text-gray-200 lg:flex ">Francis Martinez Inbox</span>
                </div>
                <div class="px-2 pt-4 lg:px-6">
                    <button class="flex items-center justify-center w-full px-2 py-3 space-x-1 text-sm font-semibold leading-4 transition-colors duration-300 bg-blue-600 rounded-md hover:bg-blue-700 text-blue-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <span class="hidden lg:flex">
                            New Message
                        </span>
                    </button>
                </div>
                <nav class="pt-3">
                    <a href="#" class="flex items-center justify-center px-4 py-3 text-sm leading-7 lg:py-2 lg:justify-between lg:space-x-2 lg:px-6 hover:bg-gray-800 group">
                <span class="flex items-center lg:space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500 transition-colors duration-300 group-hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                    <span class="hidden text-blue-500 transition-colors duration-100 group-hover:text-blue-500 lg:flex">Chat messages</span>
                </span>
                <span class="items-center justify-center w-5 h-5 p-2 text-blue-100 bg-gray-700 rounded-md text-xxs mt-[1px] hidden lg:flex">
              10
            </span>
                    </a>
                    <a href="#" class="flex items-center justify-center px-4 py-3 text-sm leading-7 lg:py-2 lg:justify-between lg:space-x-2 lg:px-6 hover:bg-gray-800 group">
            <span class="flex items-center lg:space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300 transition-colors duration-300 group-hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg>
              <span class="hidden text-gray-300 transition-colors duration-100 group-hover:text-blue-500 lg:flex">Favorites</span>
            </span>
                    </a>
                    <a href="#" class="flex items-center justify-center px-4 py-3 text-sm leading-7 lg:py-2 lg:justify-between lg:space-x-2 lg:px-6 hover:bg-gray-800 group">
            <span class="flex items-center lg:space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300 transition-colors duration-300 group-hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="hidden text-gray-300 transition-colors duration-100 group-hover:text-blue-500 lg:flex">Snooze</span>
            </span>
                    </a>
                    <a href="#" class="flex items-center justify-center px-4 py-3 text-sm leading-7 lg:py-2 lg:justify-between lg:space-x-2 lg:px-6 hover:bg-gray-800 group">
            <span class="flex items-center lg:space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300 transition-colors duration-300 group-hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
              </svg>
              <span class="hidden text-gray-300 transition-colors duration-100 group-hover:text-blue-500 lg:flex">Drafts</span>
            </span>
                        <span class="items-center justify-center w-5 h-5 p-2 text-blue-100 bg-gray-700 rounded-md text-xxs mt-[1px] hidden lg:flex">
              4
            </span>
                    </a>
                    <a href="#" class="flex items-center justify-center px-4 py-3 text-sm leading-7 lg:py-2 lg:justify-between lg:space-x-2 lg:px-6 hover:bg-gray-800 group">
            <span class="flex items-center lg:space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300 transition-colors duration-300 group-hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
              </svg>
              <span class="hidden text-gray-300 transition-colors duration-100 group-hover:text-blue-500 lg:flex">Trash</span>
            </span>
                    </a>
                    <a href="#" class="flex items-center justify-center px-4 py-3 text-sm leading-7 lg:py-2 lg:justify-between lg:space-x-2 lg:px-6 hover:bg-gray-800 group">
            <span class="flex items-center lg:space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300 transition-colors duration-300 group-hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
              </svg>
              <span class="hidden text-gray-300 transition-colors duration-100 group-hover:text-blue-500 lg:flex">Spam</span>
            </span>
                    </a>
                </nav>
                <div class="hidden px-4 mt-6 lg:px-6 lg:block">
                    <span class="block text-xs font-semibold tracking-wider text-gray-200 uppercase">Labels</span>
                    <div class="pt-4 space-y-3">
                        <a href="#" class="flex items-center space-x-4">
                            <span class="w-2 h-2 bg-green-500 rounded-full">&nbsp;</span>
                            <span class="text-sm text-gray-200 transition-colors duration-300 hover:text-blue-500">Work</span>
                        </a>
                        <a href="#" class="flex items-center space-x-4">
                            <span class="w-2 h-2 bg-blue-500 rounded-full">&nbsp;</span>
                            <span class="text-sm text-gray-200 transition-colors duration-300 hover:text-blue-500">School</span>
                        </a>
                        <a href="#" class="flex items-center space-x-4">
                            <span class="w-2 h-2 bg-orange-500 rounded-full">&nbsp;</span>
                            <span class="text-sm text-gray-200 transition-colors duration-300 hover:text-blue-500">Business</span>
                        </a>
                        <a href="#" class="flex items-center space-x-4">
                            <span class="w-2 h-2 bg-indigo-500 rounded-full">&nbsp;</span>
                            <span class="text-sm text-gray-200 transition-colors duration-300 hover:text-blue-500">Gaming</span>
                        </a>
                        <a href="#" class="flex items-center space-x-4">
                            <span class="w-2 h-2 bg-teal-500 rounded-full">&nbsp;</span>
                            <span class="text-sm text-gray-200 transition-colors duration-300 hover:text-blue-500">Friends</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-sm bg-white border-r border-gray-200 rounded-md shadow-sm shadow-gray-200" x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'chats' }" >
                <div class="flex items-center w-full px-4 py-1 border-b lg:px-6 h-14">
                    <span class="hidden text-sm font-semibold text-gray-700 lg:flex ">Chat Messages</span>
                </div>
                <div class="w-0 pl-4">
                    <nav class="flex space-x-3 text-sm text-gray-700 whitespace-nowrap">
                        <a href="#" :class="isActive('chats') ? 'border-blue-600 text-blue-600 font-semibold' : 'border-white'" @click.prevent="setActive('chats')"  class="px-4 pt-4 pb-3 border-b-2 hover:text-blue-600 hover:border-blue-500">Chats</a>
                        <a href="#" :class="isActive('media') ? 'border-blue-600 text-blue-600 font-semibold' : 'border-white'" @click.prevent="setActive('media')"  class="px-4 pt-4 pb-3 border-b-2 hover:text-blue-600 hover:border-blue-500">Media</a>
                        <a href="#" :class="isActive('history') ? 'border-blue-600 text-blue-600 font-semibold' : 'border-white'" @click.prevent="setActive('history')" class="px-4 pt-4 pb-3 border-b-2 hover:text-blue-600 hover:border-blue-500">History</a>
                    </nav>
                </div>
                <div class="px-4 pt-4 pb-8 border-t border-gray-200 lg:px-6">
                    <div :class="isActive('chats') ? 'block' : 'hidden'">
                        <div class="xl:space-y-2">
                            <!-- user -->
                            <div class="flex items-center justify-between py-2">

                                <a href="#" class="flex items-center space-x-3">
                                    <div class="relative self-start">
                                        <img src="/images/user13.jpg" class="w-8 h-8 rounded-full" alt="Image placeholder">
                                        <span class="absolute bottom-0 right-0 w-2 h-2 bg-green-500 rounded-full">&nbsp;</span>
                                    </div>
                                    <div>
                                        <span class="block text-sm font-semibold text-gray-800 transition-colors duration-300 hover:text-blue-600">Leonard Romero</span>
                                        <span class="block text-sm text-gray-600">leonard-romero@gmail.com</span>
                                    </div>
                                </a>
                                <span class="block mb-1 text-sm text-gray-600">2 hrs</span>
                            </div>
                            <!--/user -->
                            <!-- user -->
                            <div class="flex items-center justify-between py-2">
                                <a href="#" class="flex items-center space-x-3">
                                    <div class="relative self-start">
                                        <img src="/images/user14.jpg" class="w-8 h-8 rounded-full" alt="Image placeholder">
                                        <span class="absolute bottom-0 right-0 w-2 h-2 bg-gray-300 rounded-full">&nbsp;</span>
                                    </div>
                                    <div>
                                        <span class="text-sm font-semibold text-gray-800 transition-colors duration-300 hover:text-blue-600">Tanya Morales</span>
                                        <span class="block text-sm text-gray-600">tanya-romero@gmail.com</span>
                                    </div>
                                </a>
                                <span class="block mb-1 text-sm text-gray-600">12 min</span>
                            </div>
                            <!--/user -->
                            <!-- user -->
                            <div class="flex items-center justify-between py-2">
                                <a href="#" class="flex items-center space-x-3">
                                    <div class="relative self-start">
                                        <img src="/images/user15.jpg" class="w-8 h-8 rounded-full" alt="Image placeholder">
                                        <span class="absolute bottom-0 right-0 w-2 h-2 bg-gray-300 rounded-full">&nbsp;</span>
                                    </div>
                                    <div>
                                        <span class="text-sm font-semibold text-gray-800 transition-colors duration-300 hover:text-blue-600">Megan Woods</span>
                                        <span class="block text-sm text-gray-600">mwoods@gmail.com</span>
                                    </div>
                                </a>
                                <span class="block mb-1 text-sm text-gray-600">38 min</span>
                            </div>
                            <!--/user -->
                            <!-- user -->
                            <div class="flex items-center justify-between py-2">
                                <a href="#" class="flex items-center space-x-3">
                                    <div class="relative self-start">
                                        <img src="/images/user16.jpg" class="w-8 h-8 rounded-full" alt="Image placeholder">
                                        <span class="absolute bottom-0 right-0 w-2 h-2 bg-green-500 rounded-full">&nbsp;</span>
                                    </div>
                                    <div>
                                        <span class="text-sm font-semibold text-gray-800 transition-colors duration-300 hover:text-blue-600">Neil Hudson</span>
                                        <span class="block text-sm text-gray-600">nely2391@gmail.com</span>
                                    </div>
                                </a>
                                <span class="block mb-1 text-sm text-gray-600">51 min</span>
                            </div>
                            <!--/user -->
                            <!-- user -->
                            <div class="flex items-center justify-between py-2">
                                <a href="#" class="flex items-center space-x-3">
                                    <div class="relative self-start">
                                        <img src="/images/user17.jpg" class="w-8 h-8 rounded-full" alt="Image placeholder">
                                        <span class="absolute bottom-0 right-0 w-2 h-2 bg-green-500 rounded-full">&nbsp;</span>
                                    </div>
                                    <div>
                                        <span class="text-sm font-semibold text-gray-800 transition-colors duration-300 hover:text-blue-600">Bradley Harris</span>
                                        <span class="block text-sm text-gray-600">brad-romero@gmail.com</span>
                                    </div>
                                </a>
                                <span class="block mb-1 text-sm text-gray-600">97 hrs</span>
                            </div>
                            <!--/user -->
                            <!-- user -->
                            <div class="flex items-center justify-between py-2">
                                <a href="#" class="flex items-center space-x-3">
                                    <div class="relative self-start">
                                        <img src="/images/user18.jpg" class="w-8 h-8 rounded-full" alt="Image placeholder">
                                        <span class="absolute bottom-0 right-0 w-2 h-2 bg-yellow-500 rounded-full">&nbsp;</span>
                                    </div>
                                    <div>
                                        <span class="text-sm font-semibold text-gray-800 transition-colors duration-300 hover:text-blue-600">Austin Anderson</span>
                                        <span class="block text-sm text-gray-600">a.anderson@gmail.com</span>
                                    </div>
                                </a>
                                <span class="block mb-1 text-sm text-gray-600">3 min</span>
                            </div>
                            <!--/user -->
                        </div>
                    </div>
                    <!-- media tab -->
                    <div :class="isActive('media') ? 'block' : 'hidden'">
                        <div class="grid grid-cols-3 gap-2 ">
                            <img src="/images/thumbnail1.jpg" class="object-cover w-full rounded-md" alt="Image placeholder">
                            <img src="/images/thumbnail3.jpg" class="object-cover w-full rounded-md" alt="Image placeholder">
                            <img src="/images/thumbnail2.jpg" class="object-cover w-full rounded-md" alt="Image placeholder">
                            <img src="/images/thumbnail5.jpg" class="object-cover w-full rounded-md" alt="Image placeholder">
                            <img src="/images/thumbnail4.jpg" class="object-cover w-full rounded-md" alt="Image placeholder">
                            <img src="/images/thumbnail8.jpg" class="object-cover w-full rounded-md" alt="Image placeholder">
                        </div>
                    </div>
                    <!-- media tab-->
                    <div :class="isActive('history') ? 'block' : 'hidden'">This tab is empty</div>
                </div>
            </div>
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
                <div class="px-4 pt-6 flex flex-grow lg:px-6 overflow-y-auto">
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
        </div>
    </main>
</template>

<script>
export default {
    data() {
        return {
            tab: 'chats',
            isDropDownOpen: false,
        }
    },
    methods: {
        isActive (menuItem) {
            return this.tab === menuItem
        },
        setActive (menuItem) {
            this.tab = menuItem
        },
        async logout() {
            try {
                axios.post("/logout");
                this.$store.dispatch("logout");
                this.$router.push({ name: "auth-login" });
            } catch (error) {
                this.$store.dispatch("logout");
                this.$router.push({ name: "auth-login" });
            }
        }
    }
}
</script>
