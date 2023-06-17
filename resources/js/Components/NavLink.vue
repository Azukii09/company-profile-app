<template>
    <div class="flex">
        <slot name="icon" />
        <Link
            :href="href"
            class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
        >
            <span class="ml-4">
                <slot />
            </span>
        </Link>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps(["href"]);
</script>
