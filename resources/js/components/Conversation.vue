<template>
    <div class="w-full bg-white h-screen flex flex-col">
        <div class="flex justify-end h-14 px-6 py-3 bg-white border-b border-gray-200 md:justify-between ">
            <div class="flex items-center">
                <span class="hidden text-sm font-semibold text-gray-700 lg:flex">{{ contact ? 'Conversation with ' + contact.name : 'Select a contact' }}</span>
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
                        <img
                            v-if="profile_image"
                            :src="profile_image"
                            alt="{{ name }} image"
                            class="w-10 h-10 rounded-full"
                        >
                        <span v-else class="inline-block h-10 w-10 rounded-full overflow-hidden bg-gray-100">
                            <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </span>
                        <div class="text-left">
                            <span class="text-sm font-semibold text-gray-800 transition-colors duration-300 hover:text-blue-600">{{ name }}</span>
                            <span class="relative block text-xs text-gray-700">{{ email }}</span>
                        </div>
                    </button>
                    <ul
                        v-if="isDropDownOpen"
                        class="absolute z-20 w-40 py-1 mt-2 text-sm font-semibold text-gray-700 transition-all origin-top-right bg-white rounded shadow -right-2 lg:w-64"
                    >
                        <li>
                            <a
                                @click="showUserSettingsModal"
                                href="#"
                                class="block px-3 py-3 transition-colors duration-300hover:bg-gray-100 hover:text-blue-600"
                            >Settings</a>
                        </li>
                        <li>
                            <a
                                @click="$emit('logout')"
                                href="#"
                                class="block px-3 py-3 transition-colors duration-300 hover:bg-gray-100 hover:text-blue-600"
                            >Log out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <MessagesFeed
            :contact="contact"
            :messages="messages"
        ></MessagesFeed>
        <MessageForm
            v-if="contact"
            v-bind:errorMsg="error"
            @submitMessage="submitMessage"
        ></MessageForm>
    </div>
</template>

<script>
import MessagesFeed from "./MessagesFeed";
import MessageForm from "./MessageForm";
import { is422 } from "../shared/utils/response";
import {mapState} from "vuex";
import UserSettingsModal from "./UserSettingsModal";

export default {
    name: "Conversation",
    components: {MessageForm, MessagesFeed},
    props: {
        contact: {
            type: Object,
            default: null
        },
        messages: {
            type: Array,
            default: []
        },
    },
    data() {
        return {
            isDropDownOpen: false,
            error: {}
        }
    },
    computed: {
        ...mapState({
            name: (state) => state.user.name,
            email: (state) => state.user.email,
            profile_image: (state) => state.user.profile_image,
        }),
    },
    methods: {
        submitMessage(text) {
            this.error = null;
            if (!this.contact) {
                return
            }

            axios
                .post('/api/messages', {
                    'to': this.contact.id,
                    'text': text
                })
                .then((response) => {
                    this.$emit('new', response.data.data)
                })
                .catch(err => {
                    if (is422(err)) {
                        this.error = err.response.data.errors;
                        return;
                    }
                });

        },
        showUserSettingsModal() {
            this.$emit('showUserSettingsModal');
            this.isDropDownOpen = false;
        }
    },
}
</script>
