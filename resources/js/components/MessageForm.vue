<template>
    <div class="flex items-center pt-3 px-4 pb-4 lg:px-6 bg-gray-100 mt-3 border-t border-gray-200">
        <img :src="profile_image" class="w-12 h-12 mr-3 rounded-full" alt="Image placeholder">
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
