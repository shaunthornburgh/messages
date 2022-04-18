<template>
    <div v-if="isLoggedIn" >
        <router-view></router-view>
    </div>
    <div v-else>
        <main class="flex flex-col items-center justify-center min-h-screen bg-white md:flex-row">
            <div class="relative">
                <img src="images/auth-bg.svg" alt="Image placeholder" class="absolute inset-0 object-cover w-full h-screen opacity-20">
                <div class="px-8 py-12 bg-blue-600 md:h-screen md:flex-1 md:max-w-sm lg:max-w-md md:px-8 md:py-16 lg:px-12">

                    <div class="relative z-20 flex flex-col justify-between h-full">
                        <div class="flex-1">
                            <img src="/images/aircontrol-logo.svg" alt="logo" class="z-20 inline-block h-5 mb-8 md:h-7">
                        </div>

                        <div class="items-start col-span-1 md:mt-12">
                            <div class="px-6 py-6 bg-black rounded-lg bg-opacity-10">
                                <img src="/images/user2.jpg" class="w-16 h-16 rounded-full" alt="Image placeholder">
                                <span class="block mt-4 text-sm font-semibold text-blue-50">Jane Oliver</span>

                                <div class="">
                                    <p class="block text-sm text-blue-200">Unpacked now declared put you confined daughter improved. Celebr ated imprud ence few interes ted. </p>
                                    <p class="block mt-6 text-sm text-blue-200">In reasonable compliment favourable is connection dispatched in especially terminated.</p>
                                </div>
                            </div>
                            <p class="block mt-6 text-sm text-center text-blue-200">Buy AirControl today you won't regret it</p>
                        </div>


                    </div>
                </div>
            </div>
            <div class="relative z-10 flex items-center justify-center flex-1 w-full px-4 py-6 pt-12 pb-12 lg:py-32 ">
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
};
</script>

