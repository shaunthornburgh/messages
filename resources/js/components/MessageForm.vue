<template>
    <div class="flex items-center pt-3 px-4 pb-4 lg:px-6 bg-gray-100 mt-3 border-t border-gray-200">
        <img
            v-if="profile_image"
            :src="profile_image"
            class="w-12 h-12 mr-3 rounded-full"
            alt="Image placeholder"
        >
        <span
            v-else
            class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-200 mr-3"
        >
            <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
        </span>
        <div class="flex-1">
            <input
                v-model="text"
                @keydown.enter="handleSubmit"
                name="me"
                type="text"
                class="w-full px-4 py-3 text-sm placeholder-gray-400 border border-gray-200 rounded-md"
                placeholder="Leave a message"
                :class="[{'border-red-500': errorFor('text')}]"
            >
            <ValidationErrors :errors="errorFor('text')"></ValidationErrors>
        </div>
    </div>
</template>

<script>
import validationErrors from "../shared/mixins/validationErrors";
import {mapState} from "vuex";

export default {
    name: "MessageForm",
    props: {
        errorMsg: Object,
    },
    data() {
        return {
            text: ''
        }
    },
    computed: {
        ...mapState({
            profile_image: (state) => state.user.profile_image,
        }),
    },
    mixins: [validationErrors],
    methods: {
        handleSubmit(e) {
            this.errors = null;
            e.preventDefault();
            if (this.text === '') {
                return;
            }

            this.$emit('submitMessage', this.text);
            this.text = '';
        }
    },
    watch: {
        errorMsg() {
            this.errors = this.errorMsg
        }
    }

}
</script>

<style scoped>

</style>
