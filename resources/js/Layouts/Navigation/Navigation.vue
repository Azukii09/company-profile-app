<script setup>
import { ref } from "vue";
import NavLink from "@/Components/NavLink.vue";
import { Link } from "@inertiajs/vue3";

const showingNavigationDropdown = ref(false);

let showingMSDM = ref(false);
let showingMIK = ref(false);
let showCarier = ref(false);
</script>

<template>
    <aside
        class="z-20 hidden w-64 overflow-y-auto bg-white md:block flex-shrink-0"
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
                    <NavLink
                        :href="route('dashboard')"
                        :active="route().current('dashboard')"
                    >
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
                    <button
                        @click="showingMSDM = !showingMSDM"
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
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
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
                            <span class="ml-4">Manajemen SDM</span>
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
                        v-show="showingMSDM"
                        class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-200"
                        aria-label="submenu"
                    >
                        <li
                            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800"
                        >
                            <button
                                @click="showingMIK = !showingMIK"
                                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                                aria-haspopup="true"
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
                                    <span class="ml-2">Informasi Karyawan</span>
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
                                v-show="showingMIK"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-white"
                                aria-label="submenu"
                            >
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800"
                                >
                                    <a class="w-full" href="#">Child menu</a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800"
                        >
                            <button
                                @click="showCarier = !showCarier"
                                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                                aria-haspopup="true"
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
                                    <span class="ml-2">
                                        Karir & Kompetensi
                                    </span>
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
                                v-show="showCarier"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-white"
                                aria-label="submenu"
                            >
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800"
                                >
                                    <Link :href="route('dashboard')">
                                        Kompetensi
                                    </Link>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800"
                        >
                            <span class="inline-flex items-center">
                                <svg
                                    class="h-5 w-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
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
                                            d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z"
                                            stroke="#686b6e"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                        <path
                                            d="M3.40991 22C3.40991 18.13 7.25991 15 11.9999 15C12.9599 15 13.8899 15.13 14.7599 15.37"
                                            stroke="#686b6e"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                        <path
                                            d="M22 18C22 18.32 21.96 18.63 21.88 18.93C21.79 19.33 21.63 19.72 21.42 20.06C20.73 21.22 19.46 22 18 22C16.97 22 16.04 21.61 15.34 20.97C15.04 20.71 14.78 20.4 14.58 20.06C14.21 19.46 14 18.75 14 18C14 16.92 14.43 15.93 15.13 15.21C15.86 14.46 16.88 14 18 14C19.18 14 20.25 14.51 20.97 15.33C21.61 16.04 22 16.98 22 18Z"
                                            stroke="#686b6e"
                                            stroke-width="1.5"
                                            stroke-miterlimit="10"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                        <path
                                            d="M19.49 17.98H16.51"
                                            stroke="#686b6e"
                                            stroke-width="1.5"
                                            stroke-miterlimit="10"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                        <path
                                            d="M18 16.52V19.51"
                                            stroke="#686b6e"
                                            stroke-width="1.5"
                                            stroke-miterlimit="10"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                    </g>
                                </svg>
                                <a href="#" class="ml-2">Rekrutmen</a>
                            </span>
                        </li>
                        <li
                            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800"
                        >
                            <span class="inline-flex items-center">
                                <svg
                                    class="h-5 w-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
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
                                            d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z"
                                            stroke="#686b6e"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                        <path
                                            d="M19.2101 15.74L15.67 19.2801C15.53 19.4201 15.4 19.68 15.37 19.87L15.18 21.22C15.11 21.71 15.45 22.05 15.94 21.98L17.29 21.79C17.48 21.76 17.75 21.63 17.88 21.49L21.42 17.95C22.03 17.34 22.32 16.63 21.42 15.73C20.53 14.84 19.8201 15.13 19.2101 15.74Z"
                                            stroke="#686b6e"
                                            stroke-width="1.5"
                                            stroke-miterlimit="10"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                        <path
                                            d="M18.7001 16.25C19.0001 17.33 19.84 18.17 20.92 18.47"
                                            stroke="#686b6e"
                                            stroke-width="1.5"
                                            stroke-miterlimit="10"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                        <path
                                            d="M3.40991 22C3.40991 18.13 7.25994 15 11.9999 15C13.0399 15 14.0399 15.15 14.9699 15.43"
                                            stroke="#686b6e"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                    </g>
                                </svg>
                                <a href="#" class="ml-2">Penilaian Kerja</a>
                            </span>
                        </li>
                        <li
                            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800"
                        >
                            <span class="inline-flex items-center">
                                <svg
                                    class="h-5 w-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
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
                                            d="M17.5 3.75H18C18.5523 3.75 19 4.08579 19 4.5M17.5 3.75H17C16.4477 3.75 16 4.08579 16 4.5V5.25C16 5.66421 16.4477 6 17 6H18C18.5523 6 19 6.33579 19 6.75V7.5C19 7.91421 18.5523 8.25 18 8.25H17.5M17.5 3.75V3M17.5 8.25H17C16.4477 8.25 16 7.91421 16 7.5M17.5 8.25V9M13.5 4.29076C13.0368 4.10325 12.5305 4 12 4C9.79086 4 8 5.79086 8 8C8 10.2091 9.79086 12 12 12C13.1947 12 14.2671 11.4762 15 10.6458M9.31765 14H14.6824C15.1649 14 15.4061 14 15.6219 14.0461C16.3688 14.2056 17.0147 14.7661 17.3765 15.569C17.4811 15.8009 17.5574 16.0765 17.71 16.6278C17.8933 17.2901 17.985 17.6213 17.9974 17.8884C18.0411 18.8308 17.5318 19.6817 16.7756 19.9297C16.5613 20 16.2714 20 15.6916 20H8.30844C7.72864 20 7.43875 20 7.22441 19.9297C6.46818 19.6817 5.95888 18.8308 6.00261 17.8884C6.01501 17.6213 6.10668 17.2901 6.29003 16.6278C6.44262 16.0765 6.51891 15.8009 6.62346 15.569C6.9853 14.7661 7.63116 14.2056 8.37806 14.0461C8.59387 14 8.83513 14 9.31765 14Z"
                                            stroke="#6b6b6b"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                    </g>
                                </svg>
                                <a href="#" class="ml-2">Penggajian</a>
                            </span>
                        </li>
                        <li
                            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800"
                        >
                            <span class="inline-flex items-center">
                                <svg
                                    class="h-5 w-5"
                                    fill="#6c6a6a"
                                    viewBox="0 0 1024 1024"
                                    xmlns="http://www.w3.org/2000/svg"
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
                                            d="M486.4 422.4c0-42.667-34.133-76.8-76.8-76.8s-76.8 34.133-76.8 76.8c0 42.667 34.133 76.8 76.8 76.8s76.8-34.133 76.8-76.8zm-106.667 0c0-21.333 17.067-34.133 34.133-34.133s34.133 17.067 34.133 34.133-17.067 34.133-34.133 34.133-34.133-12.8-34.133-34.133zm226.134 251.733c42.667 0 76.8-34.133 76.8-76.8s-34.133-76.8-76.8-76.8-76.8 34.133-76.8 76.8 34.133 76.8 76.8 76.8zm0-110.933c17.067 0 34.133 17.067 34.133 34.133 0 21.333-17.067 34.133-34.133 34.133s-34.133-17.067-34.133-34.133c0-21.333 17.067-34.133 34.133-34.133zM396.8 652.8c4.267 0 12.8-4.267 17.067-8.533l217.6-226.133c8.533-8.533 8.533-21.333 0-29.867s-21.333-8.533-29.867 0L384 614.4c-8.533 8.533-8.533 21.333 0 29.867 0 4.267 4.267 8.533 12.8 8.533z"
                                        ></path>
                                        <path
                                            d="M955.733 512c0-247.467-200.533-448-448-448C264.533 64 64 264.533 64 512c0 238.933 187.733 435.2 426.667 448 12.8 0 21.333-8.533 21.333-21.333s-8.533-21.333-21.333-21.333C273.067 908.801 102.4 729.601 102.4 512.001c0-221.867 179.2-405.333 405.333-405.333s405.333 179.2 405.333 405.333c0 187.733-128 349.867-311.467 392.533l17.067-29.867c4.267-8.533 4.267-21.333-8.533-29.867-8.533-4.267-21.333-4.267-29.867 8.533l-34.133 59.733c-4.267 0-4.267 4.267-8.533 8.533s-4.267 8.533-4.267 12.8 4.267 17.067 8.533 21.333c4.267 0 8.533 4.267 12.8 4.267l59.733 34.133c4.267 0 8.533 4.267 12.8 4.267 8.533 0 12.8-4.267 17.067-8.533 4.267-8.533 4.267-21.333-8.533-29.867l-17.067-12.8c200.533-55.467 337.067-230.4 337.067-435.2z"
                                        ></path>
                                    </g>
                                </svg>
                                <a href="#" class="ml-2">Pajak Karyawan</a>
                            </span>
                        </li>
                    </ul>
                </li>

                <li class="relative px-6 py-3">
                    <NavLink :href="route('dashboard')">
                        <template #icon>
                            <svg
                                class="w-5 h-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                                ></path>
                            </svg>
                        </template>
                        Users
                    </NavLink>
                </li>

                <li class="relative px-6 py-3">
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
                                    d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
                                ></path>
                            </svg>
                        </template>
                        About us
                    </NavLink>
                </li>
            </ul>
        </div>
    </aside>
</template>
