<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Pagination from "@/Components/Pagination.vue";
import { Head } from "@inertiajs/vue3";
import Modal from "@/Components/Modal.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { ref } from "vue";

const confirmingUserDeletion = ref(false);

const confirmUserDeletion = () => {
    confirmingUserDeletion.value = true;
};

const closeModal = () => {
    confirmingUserDeletion.value = false;
};
const props = defineProps({
    categories: Object,
});
</script>
<template>
    <Head title="CMS" />

    <AuthenticatedLayout>
        <template #header> Category </template>

        <div class="p-4 bg-white rounded-lg shadow-xs">
            <div
                class="inline-flex overflow-hidden mb-4 w-full bg-white rounded-lg shadow-md"
            >
                <div class="px-4 py-2 -mx-3">
                    <div class="mx-3">
                        <span class="font-semibold text-blue-500">Info</span>
                        <p class="text-sm text-gray-600">Coba</p>
                    </div>
                </div>
            </div>

            <div
                class="overflow-hidden mb-8 w-full rounded-lg border shadow-xs"
            >
                <div class="overflow-x-auto w-full">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-50 border-b"
                            >
                                <th class="px-4 py-3">Category</th>
                                <th class="px-4 py-3">Description</th>
                                <th class="px-4 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y">
                            <tr
                                v-for="category in categories.data"
                                :key="category.id"
                                class="text-gray-700"
                            >
                                <td class="px-4 py-3 text-sm">
                                    {{ category.category_name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ category.category_desc }}
                                </td>
                                <td px-4 py-3>
                                    <PrimaryButton
                                        class="px-3 py-1"
                                        @click="confirmUserDeletion"
                                        >Coba tombol</PrimaryButton
                                    >

                                    <Modal
                                        :show="confirmingUserDeletion"
                                        @close="closeModal"
                                    >
                                        <div class="p-6">
                                            <h2
                                                class="text-lg font-medium text-gray-900"
                                            >
                                                Are you sure you want to delete
                                                your account?
                                            </h2>

                                            <p
                                                class="mt-1 text-sm text-gray-600"
                                            >
                                                Once your account is deleted,
                                                all of its resources and data
                                                will be permanently deleted.
                                                Please enter your password to
                                                confirm you would like to
                                                permanently delete your account.
                                            </p>

                                            <div class="mt-6"></div>

                                            <div class="mt-6 flex justify-end">
                                                <PrimaryButton
                                                    @click="closeModal"
                                                >
                                                    Cancel
                                                </PrimaryButton>
                                            </div>
                                        </div>
                                    </Modal>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div
                    class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase bg-gray-50 border-t sm:grid-cols-9"
                >
                    <pagination :links="categories.links" />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
