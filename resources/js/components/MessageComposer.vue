<template>
    <div class="flex items-center pt-3 px-4 pb-4 lg:px-6 bg-gray-100 mt-3 border-t border-gray-200">
        <img src="/images/user.jpg" class="w-12 h-12 mr-3 rounded-full" alt="Image placeholder">
        <div class="flex-1">
            <input
                v-model="message"
                @keydown.enter="send"
                type="text"
                class="w-full px-4 py-3 text-sm placeholder-gray-400 border border-gray-200 rounded-md"
                placeholder="Leave a message"
            >
        </div>
    </div>
</template>

<script>
export default {
    name: "MessageComposer",
    data() {
        return {
            message: ''
        }
    },
    methods: {
        send() {
            if (this.message == '') {
                return;
            }

            this.$emit('send', this.message);
            this.message = '';
        }
    }
}
</script>

<style scoped>

</style>
