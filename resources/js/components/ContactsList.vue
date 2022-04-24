<template>
    <div class="w-full max-w-sm bg-white border-r border-gray-200 rounded-md shadow-sm shadow-gray-200 h-screen flex flex-col">
        <div class="flex items-center w-full px-4 py-6 border-b lg:px-6 h-14">
            <span class="hidden text-sm font-semibold text-gray-700 lg:flex ">Chat Messages</span>
        </div>
        <div class="flex w-0 pl-4">
            <nav class="flex space-x-3 text-sm text-gray-700 whitespace-nowrap">
                <a href="#" :class="isActive('chats') ? 'border-blue-600 text-blue-600 font-semibold' : 'border-white'" @click.prevent="setActive('chats')"  class="px-4 pt-4 pb-3 border-b-2 hover:text-blue-600 hover:border-blue-500">Chats</a>
                <a href="#" :class="isActive('media') ? 'border-blue-600 text-blue-600 font-semibold' : 'border-white'" @click.prevent="setActive('media')"  class="px-4 pt-4 pb-3 border-b-2 hover:text-blue-600 hover:border-blue-500">Media</a>
                <a href="#" :class="isActive('history') ? 'border-blue-600 text-blue-600 font-semibold' : 'border-white'" @click.prevent="setActive('history')" class="px-4 pt-4 pb-3 border-b-2 hover:text-blue-600 hover:border-blue-500">History</a>
            </nav>
        </div>
        <div class="flex flex-grow pt-4 pb-8 border-t border-gray-200 overflow-y-auto">
            <div class="w-full" :class="isActive('chats') ? 'block' : 'hidden'">
                <div class="xl:space-y-2">
                    <div
                        v-for="contact in contacts" :key="contact.id"
                        @click="selectContact(contact)"
                        class="flex items-center justify-between py-2 px-4"
                        :class="{'bg-gray-100': selected === contact}"
                    >
                        <a href="#" class="flex items-center space-x-3">
                            <div class="relative self-start">
                                <img
                                    v-if="contact.profile_image"
                                    :src="contact.profile_image"
                                    class="w-8 h-8 rounded-full"
                                    alt="contact.name"
                                >
                                <span
                                    v-else
                                    class="inline-block h-8 w-8 rounded-full overflow-hidden bg-gray-100"
                                >
                                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </span>
                                <span class="absolute bottom-0 right-0 w-2 h-2 bg-green-500 rounded-full">&nbsp;</span>
                            </div>
                            <div>
                                <span class="block text-sm font-semibold text-gray-800 transition-colors duration-300 hover:text-blue-600">{{ contact.name }}</span>
                                <span class="block text-sm text-gray-600">{{ contact.email }}</span>
                            </div>
                        </a>
                        <span
                            v-if="contact.unread"
                            class="flex block mb-1 w-5 h-5 text-blue-600 bg-blue-100 rounded-md text-sm font-bold items-center justify-center "
                        >
                          {{ contact.unread }}
                        </span>
                        <span
                            v-else
                            class="block mb-1 text-sm text-gray-600"
                        >
                            {{ moment(contact.last_message_at).fromNow() }}
                        </span>
                    </div>
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
</template>

<script>
import moment from "moment";

export default {
    name: "ContactsList",
    props: {
        contacts: {
            type: Array,
            default: []
        }
    },
    data() {
        return {
            tab: 'chats',
            selected: this.contacts.length ? this.contacts[0] : null,
            date: new Date()
        }
    },
    created: function () {
        this.moment = moment;
    },
    methods: {
        selectContact(contact) {
            this.selected = contact;

            this.$emit('selected', contact);
        },
        isActive(menuItem) {
            return this.tab === menuItem
        },
        setActive(menuItem) {
            this.tab = menuItem
        },
    }
}
</script>

<style scoped>

</style>
