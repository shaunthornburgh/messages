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
                    v-if="message.from_profile_image"
                    :src="`${message.from_profile_image}`"
                    class="w-12 h-12 mr-3 rounded-full"
                    alt="Image placeholder"
                    :class="`${message.to === contact.id ? 'ml-3' : ''}`"
                >
                <span
                    v-else
                    class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100 mr-3"
                    :class="`${message.to === contact.id ? 'ml-3' : ''}`"
                >
                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </span>
                <div class="flex-1">
                    <div class="px-4 py-4 rounded-md bg-gradient-to-b from-gray-100 to-white lg:px-6 lg:pb-6">
                        <div class="flex items-end justify-between pb-3">
                            <div class="flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="block text-xs font-semibold tracking-wider text-gray-600 uppercase">
                                    {{ moment(message.created_at).fromNow() }}
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
import moment from "moment";

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
    created: function () {
        this.moment = moment;
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
