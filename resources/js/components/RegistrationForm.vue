<template>
    <div class="px-8 py-4 lg:px-12 lg:py-12">
        <div class="py-4 space-y-1 text-center lg:pb-10 ">
            <img src="/images/aircontrol-logo-dark.svg" alt="logo" class="z-20 inline-block mx-auto mb-10 h-7">
            <h2 class="text-lg font-semibold  text-gray-800 lg:text-2xl ">Sign in to AirControl</h2>
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
                <label for="email" class="block text-sm font-semibold text-gray-700">Email Address</label>
                <input
                    type="text"
                    name="email"
                    id="email"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md text-sm"
                    placeholder="Email address"
                    required="required"
                    v-model="email"
                    :class="[{'border-red-500': errorFor('email')}]"
                >
                <ValidationErrors :errors="errorFor('email')"></ValidationErrors>
            </div>
            <div class="space-y-2">
                <div class="flex justify-between">
                    <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                    <a href="#" class="text-sm font-semibold text-blue-600 hover:underline">Forgot password?</a>
                </div>
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="w-full px-4 py-3 border  border-gray-300 rounded-md text-sm"
                    placeholder="Password"
                    required="required"
                    v-model="password"
                    :class="[{'border-red-500': errorFor('password')}]"
                >
                <ValidationErrors :errors="errorFor('password')"></ValidationErrors>
            </div>
            <button
                type="submit"
                @click.prevent="login"
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
