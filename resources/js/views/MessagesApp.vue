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
            <ContactsList
                :contacts="contacts"
                @selected="getMessages"
            ></ContactsList>
            <Conversation
                :contact="selectedContact"
                :messages="messages"
                @new="addMessage"
                @logout="logout"
            ></Conversation>
        </div>
    </main>
</template>

<script>
import Conversation from "../components/Conversation";
import ContactsList from "../components/ContactsList";
import { mapState } from 'vuex';

export default {
    components: {Conversation, ContactsList},
    data() {
        return {
            selectedContact: null,
            messages: [],
            contacts: []
        }
    },
    computed: {
        ...mapState({
            userId: state => state.user.id
        }),
    },
    mounted() {
        axios.get('/api/contacts')
            .then((response) => {
                this.contacts = response.data.data;
            });
    },
    watch: {
        userId(userId) {
            Echo.private(`messages.${userId}`)
                .listen('NewMessage', (e) => {
                    this.handleIncoming(e.message);
                });
        }
    },
    methods: {
        addMessage(text) {
            this.messages.push(text);
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
        },
        getMessages(contact) {
            axios.get(`/api/messages/${contact.id}`)
                .then((response) => {
                    this.messages = response.data.data;
                    this.selectedContact = contact;
                });
        },
        handleIncoming(message) {
            if (this.selectedContact && message.from === this.selectedContact.id) {
                this.addMessage(message);
            }
        }
    }
}
</script>
