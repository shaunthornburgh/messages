<template>
    <div v-if="isLoggedIn" >
        <router-view></router-view>
    </div>
    <div v-else>
        <main class="flex flex-col items-center justify-center min-h-screen bg-white md:flex-row">
            <div class="relative">
                <img src="/images/auth-bg.svg" alt="Image placeholder" class="absolute inset-0 object-cover w-full h-screen opacity-20">
                <div class="px-8 py-12 bg-blue-600 md:h-screen md:flex-1 md:max-w-sm lg:max-w-md md:px-8 md:py-16 lg:px-12">

                    <div class="relative z-20 flex flex-col justify-between h-full">
                        <div class="flex-1 text-white text-xl font-bold">
                            Messages App
                        </div>

                        <div class="items-start col-span-1 md:mt-12">
                            <div class="px-6 py-6 bg-black rounded-lg bg-opacity-10">
                                <img src="/images/shaun-thornburgh.jpeg" class="w-16 h-16 rounded-full" alt="Image placeholder">
                                <span class="block mt-4 text-sm font-semibold text-blue-50">Shaun Thornburgh</span>

                                <div class="">
                                    <p class="block text-sm text-blue-200">Messages is a simple demo messaging app I built using Laravel, Vue.js and Pusher. </p>
                                    <p class="block mt-6 text-sm text-blue-200">The database is refreshed daily, and you can login with any of the users below, alternatively you may
                                        <router-link
                                            :to="{name: 'auth-register'}"
                                            class="text-blue-50 hover:underline"
                                        >create a user account</router-link>.</p>
                                    <p class="block mt-6 text-sm text-blue-200">Password for all users below is 'password'.</p>
                                    <p class="block mt-6 text-sm text-blue-200">To test functionality you can sign in on different devices with different users.</p>
                                </div>
                            </div>
                        </div>

                        <div class="items-start col-span-1 md:mt-12">
                            <div class="px-6 py-6 bg-black rounded-lg bg-opacity-10">
                                <span class="block mt-4 text-sm font-semibold text-blue-50">Current users</span>

                                <div class="">
                                    <p
                                        v-for="user in users" :key="user.email"
                                        class="block text-sm text-blue-200"
                                    >
                                        {{user}}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="relative z-10 flex items-center justify-center flex-1 w-full px-4 py-6">
                <div class="w-full max-w-md">
                    <router-view></router-view>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
import {mapState} from "vuex";

export default {
    computed: {
        ...mapState({
            isLoggedIn: "isLoggedIn"
        })
    },

    data() {
        return {
            users: [],
        }
    },

    mounted() {
        axios.get('/api/users')
            .then((response) => {
                this.users = response.data.data;
            });
    }
}
</script>

