<template>
    <span
        v-show="active"
        class="absolute inset-y-0 left-0 w-1 bg-green-600 rounded-tr-lg rounded-br-lg"
        aria-hidden="true"
    ></span>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps(["active"]);
</script>
