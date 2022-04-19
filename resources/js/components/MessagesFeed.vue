<template>
    <div class="px-4 pt-6 flex flex grow lg:px-6 overflow-y-auto" ref="feed">
        <div
            class="flex flex-col space-y-4 w-full"
        >
            <div
                class="flex items-start max-w-lg pt-3"
                v-for="message in messages"
                key="message.id"
                :class="`${message.to === contact.id ? 'flex-row-reverse self-end space-x-3' : ''}`"
            >
                <img
                    src="/images/user3.jpg"
                    class="w-12 h-12 mr-3 rounded-full"
                    alt="Image placeholder"
                    :class="`${message.to === contact.id ? 'ml-3' : ''}`"
                >
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
                        <p class="block text-sm text-gray-800">{{ message.text }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "MessagesFeed",
    props: {
        contact: {
            type: Object
        },
        messages: {
            type: Array,
            required: true
        }
    },
    methods: {
        scrollToBottom() {
            setTimeout(() => {
                this.$refs.feed.scrollTop = this.$refs.feed.scrollHeight - this.$refs.feed.clientHeight;
            }, 100);
        }
    },
    computed: {
        messagesLength() {
            return this.messages.length
        }
    },
    watch: {
        contact() {
            this.scrollToBottom();
        },
        messagesLength() {
            this.scrollToBottom();
        }
    }
}
</script>
