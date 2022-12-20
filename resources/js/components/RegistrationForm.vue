<template>
    <div class="px-8 py-4 lg:px-12 lg:py-12">
        <div class="py-4 space-y-1 text-center lg:pb-10 ">
            <h2 class="text-lg font-semibold  text-gray-800 lg:text-2xl ">Register to use Messages</h2>
            <p class="text-sm font-semibold text-gray-700">Already have an account?
                <router-link
                    :to="{name: 'auth-login'}"
                    class="text-blue-600 hover:underline"
                >
                    Login here
                </router-link>
            </p>
        </div>

        <form action="#" class="block space-y-6" method="post">
            <div class="space-y-2">
                <label for="email" class="block text-sm font-semibold text-gray-700">Name</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md text-sm"
                    placeholder="Name"
                    required="required"
                    v-model="user.name"
                    :class="[{'border-red-500': errorFor('email')}]"
                >
                <ValidationErrors :errors="errorFor('name')"></ValidationErrors>
            </div>
            <div class="space-y-2">
                <label for="email" class="block text-sm font-semibold text-gray-700">Email Address</label>
                <input
                    type="text"
                    name="email"
                    id="email"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md text-sm"
                    placeholder="Email address"
                    required="required"
                    v-model="user.email"
                    :class="[{'border-red-500': errorFor('email')}]"
                >
                <ValidationErrors :errors="errorFor('email')"></ValidationErrors>
            </div>
            <div class="space-y-2">
                <div class="flex justify-between">
                    <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                </div>
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md text-sm"
                    placeholder="Password"
                    required="required"
                    v-model="user.password"
                    :class="[{'border-red-500': errorFor('password')}]"
                >
                <ValidationErrors :errors="errorFor('password')"></ValidationErrors>
            </div>
            <div class="space-y-2">
                <div class="flex justify-between">
                    <label for="password" class="block text-sm font-semibold text-gray-700">Password confirmation</label>
                </div>
                <input
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md text-sm"
                    placeholder="Confirm your password"
                    required="required"
                    v-model="user.password_confirmation"
                    :class="[{'border-red-500': errorFor('password_confirmation')}]"
                >
                <ValidationErrors :errors="errorFor('password_confirmation')"></ValidationErrors>
            </div>
            <button
                type="submit"
                @click.prevent="register"
                class="flex items-center justify-center w-full px-4 py-4 space-x-1 text-sm font-semibold leading-4 text-center transition-colors duration-300 bg-blue-600 rounded-md hover:bg-blue-700 text-blue-50">
                <span>
                    Register
                </span>
            </button>
        </form>
    </div>
</template>

<script>
import validationErrors from "../shared/mixins/validationErrors";
import { logIn } from "../shared/utils/auth";

export default {
    mixins: [validationErrors],
    data() {
        return {
            user: {
                name: null,
                email: null,
                password: null,
                password_confirmation: null
            },
            loading: false
        };
    },
    methods: {
        async register() {
            this.loading = true;
            this.errors = null;
            try {
                const response = await axios.post("/register", this.user);
                if (201 === response.status) {
                    logIn();
                    this.$store.dispatch("loadUser");
                    this.$router.push({ name: "messages" });
                }
            } catch (error) {
                this.errors = error.response && error.response.data.errors;
            }
            this.loading = false;
        }
    }
};
</script>
