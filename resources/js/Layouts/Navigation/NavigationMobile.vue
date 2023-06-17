<script setup>
import NavLink from "@/Components/NavLink.vue";
import ActiveLink from "@/Components/ActiveLink.vue";
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";

let showingUser = ref(false);
let showingCMS = ref(false);
</script>

<template>
    <transition
        enter-active-class="transition ease-in-out duration-150"
        enter-from-class="opacity-0"
        enter-to-class="opacity-100"
        leave-active-class="transition ease-in-out duration-150"
        leave-from-class="opacity-100"
        leave-to-class="opacity-0"
    >
        <div
            v-show="$page.props.showingMobileMenu"
            class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
        ></div>
    </transition>
    <transition
        enter-active-class="transition ease-in-out duration-150"
        enter-from-class="opacity-0 transform -translate-x-20"
        enter-to-class="opacity-100"
        leave-active-class="transition ease-in-out duration-150"
        leave-from-class="opacity-100"
        leave-to-class="opacity-0 transform -translate-x-20"
    >
        <aside
            v-show="$page.props.showingMobileMenu"
            class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white md:hidden"
        >
            <div class="py-4 text-gray-500">
                <Link
                    class="ml-6 text-lg font-bold text-gray-800"
                    :href="route('dashboard')"
                >
                    Logo
                </Link>

                <ul class="mt-6">
                    <li class="relative px-6 py-3">
                        <ActiveLink :active="route().current('dashboard')" />
                        <NavLink :href="route('dashboard')">
                            <template #icon>
                                <svg
                                    class="w-5 h-5"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                                    ></path>
                                </svg>
                            </template>
                            Dashboard
                        </NavLink>
                    </li>

                    <li class="relative px-6 py-3">
                        <ActiveLink :active="false" />
                        <button
                            @click="showingUser = !showingUser"
                            class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                            aria-haspopup="true"
                        >
                            <span class="inline-flex items-center">
                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    stroke="#828282"
                                    class="w-5 h-5"
                                >
                                    <g
                                        id="SVGRepo_bgCarrier"
                                        stroke-width="0"
                                    ></g>
                                    <g
                                        id="SVGRepo_tracerCarrier"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M2 20V4C2 3.44772 2.44772 3 3 3H8.44792C8.79153 3 9.11108 3.17641 9.29416 3.46719L10.5947 5.53281C10.7778 5.82359 11.0974 6 11.441 6H21C21.5523 6 22 6.44772 22 7V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20Z"
                                            stroke="#828282"
                                            stroke-width="2"
                                        ></path>
                                        <circle
                                            cx="12"
                                            cy="12"
                                            r="2"
                                            stroke="#828282"
                                            stroke-width="2"
                                        ></circle>
                                        <path
                                            d="M15 17C15 16.6494 14.9398 16.3128 14.8293 16C14.4175 14.8348 13.3062 14 12 14C10.6938 14 9.58254 14.8348 9.17071 16C9.06015 16.3128 9 16.6494 9 17"
                                            stroke="#828282"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                        ></path>
                                    </g>
                                </svg>
                                <span class="ml-4">User</span>
                            </span>
                            <svg
                                class="w-4 h-4"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </button>
                        <ul
                            v-show="showingUser"
                            class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-200"
                            aria-label="submenu"
                        >
                            <li
                                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800"
                            >
                                <span class="inline-flex items-center">
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24.00 24.00"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        stroke="#000000"
                                        stroke-width="0.9120000000000001"
                                    >
                                        <g
                                            id="SVGRepo_bgCarrier"
                                            stroke-width="0"
                                        ></g>
                                        <g
                                            id="SVGRepo_tracerCarrier"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke="#CCCCCC"
                                            stroke-width="0.192"
                                        ></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M13 9H18M13 11H16M10.5 9.5C10.5 10.3284 9.82843 11 9 11C8.17157 11 7.5 10.3284 7.5 9.5C7.5 8.67157 8.17157 8 9 8C9.82843 8 10.5 8.67157 10.5 9.5ZM7.65882 13H10.3412C10.5824 13 10.7031 13 10.811 13.0154C11.1844 13.0685 11.5074 13.2554 11.6883 13.523C11.7405 13.6003 11.7787 13.6922 11.855 13.8759C11.9467 14.0967 11.9925 14.2071 11.9987 14.2961C12.0206 14.6103 11.7659 14.8939 11.3878 14.9766C11.2806 15 11.1357 15 10.8458 15H7.15422C6.86432 15 6.71937 15 6.61221 14.9766C6.23409 14.8939 5.97944 14.6103 6.00131 14.2961C6.0075 14.2071 6.05334 14.0967 6.14502 13.8759C6.22131 13.6922 6.25945 13.6003 6.31173 13.523C6.49265 13.2554 6.81558 13.0685 7.18903 13.0154C7.29693 13 7.41756 13 7.65882 13ZM6 17H18C18.9428 17 19.4142 17 19.7071 16.7071C20 16.4142 20 15.9428 20 15V8C20 7.05719 20 6.58579 19.7071 6.29289C19.4142 6 18.9428 6 18 6H6C5.05719 6 4.58579 6 4.29289 6.29289C4 6.58579 4 7.05719 4 8V15C4 15.9428 4 16.4142 4.29289 16.7071C4.58579 17 5.05719 17 6 17Z"
                                                stroke="#606062"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            ></path>
                                        </g>
                                    </svg>
                                    <span class="ml-2">User</span>
                                </span>
                            </li>
                            <li
                                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800"
                            >
                                <span class="inline-flex items-center">
                                    <svg
                                        class="w-5 h-5"
                                        viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="#000000"
                                    >
                                        <g
                                            id="SVGRepo_bgCarrier"
                                            stroke-width="0"
                                        ></g>
                                        <g
                                            id="SVGRepo_tracerCarrier"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="m 12 0 c -1.105469 0 -2 0.894531 -2 2 s 0.894531 2 2 2 s 2 -0.894531 2 -2 s -0.894531 -2 -2 -2 z m -8 2 c -1.105469 0 -2 0.894531 -2 2 s 0.894531 2 2 2 s 2 -0.894531 2 -2 s -0.894531 -2 -2 -2 z m 7 3 c -1.3125 0 -2.417969 0.832031 -2.832031 2 h 7.664062 c -0.414062 -1.167969 -1.519531 -2 -2.832031 -2 z m -8 2 c -1.660156 0 -3 1.339844 -3 3 c 0 0.554688 0.445312 1 1 1 h 6 c 0.554688 0 1 -0.445312 1 -1 c 0 -1.660156 -1.339844 -3 -3 -3 z m 9 1 c -0.257812 0 -0.511719 0.097656 -0.707031 0.292969 l -2 2 c -0.183594 0.1875 -0.289063 0.441406 -0.285157 0.707031 h -0.007812 v 1 h 2 v 1 c -0.105469 0.800781 -0.5 1 -1 1 h -4 c -1 0 -1 -1 -1 -1 c 0 -0.550781 -0.449219 -1 -1 -1 s -1 0.449219 -1 1 c 0 1.332031 0.8125 2.273438 1.550781 2.644531 c 0.742188 0.371094 1.449219 0.355469 1.449219 0.355469 h 4 s 0.707031 0.015625 1.449219 -0.355469 c 0.738281 -0.371093 1.550781 -1.3125 1.550781 -2.644531 v -1 h 2 v -1 h -0.007812 c 0.003906 -0.265625 -0.101563 -0.519531 -0.285157 -0.707031 l -2 -2 c -0.195312 -0.195313 -0.449219 -0.292969 -0.707031 -0.292969 z m 0 0"
                                                fill="#636f74"
                                            ></path>
                                        </g>
                                    </svg>
                                    <span class="ml-2"> Role </span>
                                </span>
                            </li>
                        </ul>
                    </li>

                    <li class="relative px-6 py-3">
                        <ActiveLink
                            :active="
                                route().current('tag.index') ||
                                route().current('post.index') ||
                                route().current('categories.index')
                            "
                        />
                        <button
                            @click="showingCMS = !showingCMS"
                            class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                            aria-haspopup="true"
                        >
                            <span class="inline-flex items-center">
                                <svg
                                    version="1.1"
                                    id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 38 32"
                                    enable-background="new 0 0 38 32"
                                    xml:space="preserve"
                                    fill="#000000"
                                    stroke="#828282"
                                    class="w-5 h-5"
                                >
                                    <g
                                        id="SVGRepo_bgCarrier"
                                        stroke-width="0"
                                    ></g>
                                    <g
                                        id="SVGRepo_tracerCarrier"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <path
                                                fill="#808184"
                                                d="M36.5,0h-35C0.673,0,0,0.673,0,1.5v29C0,31.327,0.673,32,1.5,32h35c0.827,0,1.5-0.673,1.5-1.5v-29 C38,0.673,37.327,0,36.5,0z M37,30.5c0,0.275-0.225,0.5-0.5,0.5h-35C1.225,31,1,30.775,1,30.5v-29C1,1.225,1.225,1,1.5,1h35 C36.775,1,37,1.225,37,1.5V30.5z"
                                            ></path>
                                            <path
                                                fill="#808184"
                                                d="M17.5,16h-11C5.673,16,5,16.673,5,17.5v8C5,26.327,5.673,27,6.5,27h11c0.827,0,1.5-0.673,1.5-1.5v-8 C19,16.673,18.327,16,17.5,16z M18,25.5c0,0.275-0.225,0.5-0.5,0.5h-11C6.225,26,6,25.775,6,25.5v-8C6,17.225,6.225,17,6.5,17h11 c0.275,0,0.5,0.225,0.5,0.5V25.5z"
                                            ></path>
                                            <path
                                                fill="#808184"
                                                d="M31.5,5h-25C5.673,5,5,5.673,5,6.5v5C5,12.327,5.673,13,6.5,13h25c0.827,0,1.5-0.673,1.5-1.5v-5 C33,5.673,32.327,5,31.5,5z M32,11.5c0,0.275-0.225,0.5-0.5,0.5h-25C6.225,12,6,11.775,6,11.5v-5C6,6.225,6.225,6,6.5,6h25 C31.775,6,32,6.225,32,6.5V11.5z"
                                            ></path>
                                            <path
                                                fill="#808184"
                                                d="M32,17H22c-0.276,0-0.5,0.224-0.5,0.5S21.724,18,22,18h10c0.276,0,0.5-0.224,0.5-0.5S32.276,17,32,17z"
                                            ></path>
                                            <path
                                                fill="#808184"
                                                d="M32,21H22c-0.276,0-0.5,0.224-0.5,0.5S21.724,22,22,22h10c0.276,0,0.5-0.224,0.5-0.5S32.276,21,32,21z"
                                            ></path>
                                            <path
                                                fill="#808184"
                                                d="M32,25H22c-0.276,0-0.5,0.224-0.5,0.5S21.724,26,22,26h10c0.276,0,0.5-0.224,0.5-0.5S32.276,25,32,25z"
                                            ></path>
                                        </g>
                                    </g>
                                </svg>
                                <span class="ml-4">CMS</span>
                            </span>
                            <svg
                                class="w-4 h-4"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </button>
                        <ul
                            v-show="showingCMS"
                            class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-200"
                            aria-label="submenu"
                        >
                            <li
                                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800"
                            >
                                <span class="inline-flex items-center">
                                    <svg
                                        fill="#616161"
                                        width="215px"
                                        height="215px"
                                        viewBox="0 0 32.00 32.00"
                                        style="
                                            fill-rule: evenodd;
                                            clip-rule: evenodd;
                                            stroke-linejoin: round;
                                            stroke-miterlimit: 2;
                                        "
                                        version="1.1"
                                        xml:space="preserve"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:serif="http://www.serif.com/"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        stroke="#616161"
                                        stroke-width="0.00032"
                                        class="w-5 h-5"
                                    >
                                        <g
                                            id="SVGRepo_bgCarrier"
                                            stroke-width="0"
                                        ></g>
                                        <g
                                            id="SVGRepo_tracerCarrier"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g id="Layer1">
                                                <path
                                                    d="M16,6l-13,0c-0.552,0 -1,0.448 -1,1l0,22c0,0.552 0.448,1 1,1l22,0c0.552,0 1,-0.448 1,-1l0,-13c0,-0.552 -0.448,-1 -1,-1c-0.552,-0 -1,0.448 -1,1l0,12c0,0 -20,0 -20,0c0,0 0,-20 0,-20c-0,0 12,0 12,0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1Zm-9,19l14,-0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1l-14,0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1Zm-0,-4l4,0c0.552,-0 1,-0.448 1,-1c-0,-0.552 -0.448,-1 -1,-1l-4,0c-0.552,-0 -1,0.448 -1,1c-0,0.552 0.448,1 1,1Zm22.707,-13.293c0.391,-0.39 0.391,-1.024 0,-1.414l-4,-4c-0.39,-0.391 -1.024,-0.391 -1.414,-0l-10,10c-0.14,0.139 -0.235,0.317 -0.274,0.511l-1,5c-0.065,0.328 0.037,0.667 0.274,0.903c0.236,0.237 0.575,0.339 0.903,0.274l5,-1c0.194,-0.039 0.372,-0.134 0.511,-0.274l10,-10Zm-22.707,9.293l4,0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1l-4,0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1Zm0,-4l5,-0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1l-5,-0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1Z"
                                                ></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="ml-2">Add New Post</span>
                                </span>
                            </li>
                            <li
                                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800"
                            >
                                <span class="inline-flex items-center">
                                    <svg
                                        fill="#666666"
                                        height="200px"
                                        width="200px"
                                        version="1.1"
                                        id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 198.439 198.439"
                                        xml:space="preserve"
                                        stroke="#666666"
                                        class="w-5 h-5"
                                    >
                                        <g
                                            id="SVGRepo_bgCarrier"
                                            stroke-width="0"
                                        ></g>
                                        <g
                                            id="SVGRepo_tracerCarrier"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <path
                                                    d="M197.762,169.999L177.324,5.262c-0.408-3.288-3.398-5.625-6.693-5.215L5.893,20.484c-3.005,0.373-5.261,2.927-5.261,5.955 v166c0,3.314,2.686,6,6,6h166c3.313,0,6-2.686,6-6v-14.021l13.915-1.727c1.579-0.196,3.016-1.011,3.994-2.266 C197.518,173.17,197.958,171.578,197.762,169.999z M20.436,186.439h-7.805V123.53L20.436,186.439z M13.882,40.181 c-0.186,0.023-0.367,0.057-0.546,0.096l-1.183-9.536l154.915-19.22l1.18,9.509L13.882,40.181z M166.632,186.439h-52.65l52.65-6.532 V186.439z M31.372,185.656L14.805,52.124c0.184-0.006,0.368-0.011,0.554-0.034l154.365-19.151l16.563,133.497L31.372,185.656z"
                                                ></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="ml-2">All Post </span>
                                </span>
                            </li>
                            <li
                                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800"
                            >
                                <span class="inline-flex items-center">
                                    <svg
                                        fill="#626060"
                                        width="213px"
                                        height="213px"
                                        viewBox="0 0 64.00 64.00"
                                        version="1.1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xml:space="preserve"
                                        xmlns:serif="http://www.serif.com/"
                                        style="
                                            fill-rule: evenodd;
                                            clip-rule: evenodd;
                                            stroke-linejoin: round;
                                            stroke-miterlimit: 2;
                                        "
                                        stroke="#626060"
                                        stroke-width="0.00064"
                                        class="w-5 h-5"
                                    >
                                        <g
                                            id="SVGRepo_bgCarrier"
                                            stroke-width="0"
                                        ></g>
                                        <g
                                            id="SVGRepo_tracerCarrier"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect
                                                id="Icons"
                                                x="-384"
                                                y="-320"
                                                width="1280"
                                                height="800"
                                                style="fill: none"
                                            ></rect>
                                            <g id="Icons1" serif:id="Icons">
                                                <g id="Strike"></g>
                                                <g id="H1"></g>
                                                <g id="H2"></g>
                                                <g id="H3"></g>
                                                <g id="list-ul"></g>
                                                <g id="hamburger-1"></g>
                                                <g id="hamburger-2"></g>
                                                <g id="list-ol"></g>
                                                <g id="list-task"></g>
                                                <g id="trash"></g>
                                                <g id="vertical-menu"></g>
                                                <g id="horizontal-menu"></g>
                                                <g id="sidebar-2"></g>
                                                <g id="Pen"></g>
                                                <g id="Pen1" serif:id="Pen"></g>
                                                <g id="clock"></g>
                                                <g id="external-link"></g>
                                                <g id="hr"></g>
                                                <g id="info"></g>
                                                <g id="warning"></g>
                                                <g id="plus-circle"></g>
                                                <g id="minus-circle"></g>
                                                <g id="vue"></g>
                                                <g id="cog"></g>
                                                <g id="logo"></g>
                                                <g id="radio-check"></g>
                                                <g id="eye-slash"></g>
                                                <g id="eye"></g>
                                                <g id="toggle-off"></g>
                                                <g id="shredder"></g>
                                                <g>
                                                    <path
                                                        d="M9.89,30.496c-1.14,1.122 -1.784,2.653 -1.791,4.252c-0.006,1.599 0.627,3.135 1.758,4.266c3.028,3.028 7.071,7.071 10.081,10.082c2.327,2.326 6.093,2.349 8.448,0.051c5.91,-5.768 16.235,-15.846 19.334,-18.871c0.578,-0.564 0.905,-1.338 0.905,-2.146c0,-4.228 0,-17.607 0,-17.607l-17.22,0c-0.788,0 -1.544,0.309 -2.105,0.862c-3.065,3.018 -13.447,13.239 -19.41,19.111Zm34.735,-15.973l0,11.945c0,0.811 -0.329,1.587 -0.91,2.152c-3.069,2.981 -13.093,12.718 -17.485,16.984c-1.161,1.127 -3.012,1.114 -4.157,-0.031c-2.387,-2.386 -6.296,-6.296 -8.709,-8.709c-0.562,-0.562 -0.876,-1.325 -0.872,-2.12c0.003,-0.795 0.324,-1.555 0.892,-2.112c4.455,-4.373 14.545,-14.278 17.573,-17.25c0.561,-0.551 1.316,-0.859 2.102,-0.859c3.202,0 11.566,0 11.566,0Zm-7.907,2.462c-1.751,0.015 -3.45,1.017 -4.266,2.553c-0.708,1.331 -0.75,2.987 -0.118,4.356c0.836,1.812 2.851,3.021 4.882,2.809c2.042,-0.212 3.899,-1.835 4.304,-3.896c0.296,-1.503 -0.162,-3.136 -1.213,-4.251c-0.899,-0.953 -2.18,-1.548 -3.495,-1.57c-0.031,-0.001 -0.062,-0.001 -0.094,-0.001Zm0.008,2.519c1.105,0.007 2.142,0.849 2.343,1.961c0.069,0.384 0.043,0.786 -0.09,1.154c-0.393,1.079 -1.62,1.811 -2.764,1.536c-1.139,-0.274 -1.997,-1.489 -1.802,-2.67c0.177,-1.069 1.146,-1.963 2.27,-1.981c0.014,0 0.029,0 0.043,0Z"
                                                    ></path>
                                                    <path
                                                        d="M48.625,13.137l0,4.001l3.362,0l0,11.945c0,0.811 -0.328,1.587 -0.909,2.152c-3.069,2.981 -13.093,12.717 -17.485,16.983c-1.161,1.128 -3.013,1.114 -4.157,-0.03l-0.034,-0.034l-1.016,0.993c-0.663,0.646 -1.437,1.109 -2.259,1.389l1.174,1.174c2.327,2.327 6.093,2.35 8.447,0.051c5.91,-5.768 16.235,-15.845 19.335,-18.87c0.578,-0.565 0.904,-1.339 0.904,-2.147c0,-4.227 0,-17.607 0,-17.607l-7.362,0Z"
                                                    ></path>
                                                </g>
                                                <g
                                                    id="spinner--loading--dots-"
                                                    serif:id="spinner [loading, dots]"
                                                ></g>
                                                <g id="react"></g>
                                                <g id="check-selected"></g>
                                                <g id="turn-off"></g>
                                                <g id="code-block"></g>
                                                <g id="user"></g>
                                                <g id="coffee-bean"></g>
                                                <g id="coffee-beans">
                                                    <g
                                                        id="coffee-bean1"
                                                        serif:id="coffee-bean"
                                                    ></g>
                                                </g>
                                                <g id="coffee-bean-filled"></g>
                                                <g id="coffee-beans-filled">
                                                    <g
                                                        id="coffee-bean2"
                                                        serif:id="coffee-bean"
                                                    ></g>
                                                </g>
                                                <g id="clipboard"></g>
                                                <g id="clipboard-paste"></g>
                                                <g id="clipboard-copy"></g>
                                                <g id="Layer1"></g>
                                            </g>
                                        </g>
                                    </svg>
                                    <Link
                                        class="ml-2"
                                        :href="route('tag.index')"
                                    >
                                        Tags
                                    </Link>
                                </span>
                            </li>
                            <li
                                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800"
                            >
                                <span class="inline-flex items-center">
                                    <svg
                                        fill="#707070"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 100 100"
                                        enable-background="new 0 0 100 100"
                                        xml:space="preserve"
                                        stroke="#707070"
                                        class="w-5 h-5"
                                    >
                                        <g
                                            id="SVGRepo_bgCarrier"
                                            stroke-width="0"
                                        ></g>
                                        <g
                                            id="SVGRepo_tracerCarrier"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <path
                                                    d="M61.8,29.4l8.9,8.9l0,0c2,1.9,2,5.1,0,7l0,0L47.5,68.4V47.3V36.6l7.2-7.3C56.6,27.4,59.9,27.4,61.8,29.4z"
                                                ></path>
                                            </g>
                                            <path
                                                d="M37.5,20H25c-2.8,0-5,2.2-5,5v43.8C20,75,25,80,31.2,80s11.2-5,11.2-11.2V25C42.5,22.2,40.2,20,37.5,20z M31.2,73.8c-2.8,0-5-2.2-5-5s2.2-5,5-5s5,2.2,5,5S34,73.8,31.2,73.8z"
                                            ></path>
                                            <g>
                                                <path
                                                    d="M75,57.5h-8.8l-6,6H74L73.9,74H49.8l-6,6H75c2.8,0,5-2.2,5-5V62.5C80,59.8,77.8,57.5,75,57.5L75,57.5z"
                                                ></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span> Categories </span>
                                </span>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
    </transition>
</template>
