<template>
    <div class="fixed inset-0 z-30 flex items-start justify-between p-4 pt-20 md:items-center md:pt-0">
        <!-- modal background -->
        <div class="absolute inset-0 bg-gray-600 bg-opacity-30"
             @click="modalOpen = false"
        >
            &nbsp;
        </div>
        <!--/ modal background -->

        <!-- modal -->
        <div class="relative z-50 w-full max-w-2xl pt-1 mx-auto overflow-y-auto bg-white rounded shadow-xl shadow-gray-300 max-h-[calc(100%_-_4rem)] lg:max-h-[calc(100%_-_10rem)]"

        >
            <!-- card header -->
            <div class="flex items-center justify-between px-4 py-3 md:px-6">
                <div class="relative flex items-center space-x-2">
                    <h2 class="text-base font-semibold text-gray-800">User Settings</h2>
                </div>
                <button
                    @click="$emit('closed')"
                    class="flex items-center justify-center w-8 h-8 p-1 text-gray-600 transition-colors duration-300 translate-x-3 bg-white rounded-full hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <!--/ card header -->

            <!-- modal content -->
            <form action="#" class="space-y-4">
                <div class="relative h-full px-4 py-4 border-t border-gray-200 md:py-4 md:px-6 ">
                    <div class="space-y-2">
                        <label for="name" class="block text-sm font-semibold text-gray-700">Name</label>
                        <input
                            v-model="user.name"
                            @keydown.enter=""
                            id="name"
                            name="name"
                            type="text"
                            class="w-full px-4 py-3 text-sm placeholder-gray-400 border border-gray-200 rounded-md"
                            placeholder="Name"
                            :class="[{'border-red-500': errorFor('text')}]"
                        >
                        <ValidationErrors :errors="errorFor('text')"></ValidationErrors>
                    </div>
                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-semibold text-gray-700">Email address</label>
                        <input
                            v-model="user.email"
                            @keydown.enter=""
                            id="email"
                            name="name"
                            type="text"
                            class="w-full px-4 py-3 text-sm placeholder-gray-400 border border-gray-200 rounded-md"
                            placeholder="Email address"
                            :class="[{'border-red-500': errorFor('text')}]"
                        >
                        <ValidationErrors :errors="errorFor('text')"></ValidationErrors>
                    </div>
                    <div class="space-y-2"><label class="block text-sm font-medium text-gray-700">Profile Image</label>
                        <div class="mt-1 flex items-center">
                            <img
                                v-if="user.profile_image"
                                :src="user.profile_image"
                                class="w-12 h-12 mr-3 rounded-full"
                                alt="Image placeholder"
                            >
                            <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                <svg fill="currentColor" viewBox="0 0 24 24" class="h-full w-full text-gray-300">
                                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </span>
                            <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Change
                            </button>
                            <input type="file" name="profile_image" class="cursor-pointer absolute block opacity-0 pin-r pin-t">
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button
                        @click="$emit('closed')"
                        type="button"
                        class="mr-2 bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        Cancel
                    </button>
                    <button
                        type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                        @click.prevent="submit"
                    >
                        Save
                    </button>
                </div>
            </form>
            <!--/ modal content -->
        </div>
        <!--/ modal -->
    </div>
</template>

<script>
import validationErrors from "../shared/mixins/validationErrors";

export default {
    name: "UserSettingsModal",
    mixins: [validationErrors],
    props: {
        user: Object
    },
    methods: {
        submit() {
            this.$emit('submit', this.user);
        }
    }
}
</script>
