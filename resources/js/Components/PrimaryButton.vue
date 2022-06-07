<template>
    <button
        :type="type"
        :class="[
            {
                'disabled scale-95 bg-gray-400 hover:bg-gray-400 cursor-progress':
                    isLoading,
            },
            style,
            color,
            padding,
            fontSize,
            leading,
            rounded,
        ]"
    >
        <template v-if="isLoading">
            <loading-icon />
        </template>
        <slot />
    </button>
</template>

<script>
import { defineComponent } from "vue";
import { Link } from "@inertiajs/inertia-vue3";
import LoadingIcon from "./icon/LoadingIcon";

export default {
    components: {
        Link,
        LoadingIcon,
    },
    props: {
        type: {
            required: false,
            default: "button",
        },
        isLoading: {
            required: false,
            type: Boolean,
            default: false,
        },
        isDanger: {
            required: false,
            type: Boolean,
            default: false,
        },
        size: {
            required: false,
            type: String,
            default: "base",
            validator: (prop) =>
                ["xs", "sm", "base", "lg", "xl"].includes(prop),
        },
        color: {
            required: false,
            type: String,
            default: "brand",
        },
    },
    data() {
        return {
            style: "shadow-sm max-w-xs flex-1 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-brand-500 sm:w-full hover:scale-95 transition",
        };
    },
    computed: {
        color() {
            if (this.isDanger) {
                return "bg-red-600 hover:bg-red-500";
            }

            if (this.color == "white") {
                return `bg-white hover:bg-gray-200 text-gray-900`;
            }

            if (this.color == "black") {
                return `bg-black hover:bg-gray-800 text-white`;
            }

            return `bg-${this.color}-600 hover:bg-${this.color}-700`;
        },
        padding() {
            switch (this.size) {
                case "xs":
                    return "px-2.5 py-1.5";
                case "sm":
                    return "px-3 py-2";
                case "base":
                    return "px-4 py-2";
                case "lg":
                    return "px-4 py-2.5";
                case "xl":
                    return "px-6 py-3";
            }
        },
        fontSize() {
            switch (this.size) {
                case "xs":
                    return "text-xs";
                case "sm":
                    return "text-sm";
                case "base":
                    return "text-sm";
                case "lg":
                    return "text-base";
                case "xl":
                    return "text-xl";
            }
        },
        leading() {
            switch (this.size) {
                case "sm":
                    return "leading-4";
                default:
                    return "leading-normal";
            }
        },
        rounded() {
            switch (this.size) {
                case "xs":
                    return "rounded";
                default:
                    return "rounded-md";
                    return "rounded-full";
            }
        },
        iconSize() {
            switch (this.size) {
                case "xs":
                    return "h-4 w-4";
                case "sm":
                    return "h-4 w-4";
                case "base":
                    return "h-5 w-5";
                case "lg":
                    return "h-5 w-5";
                case "xl":
                    return "h-5 w-5";
            }
        },
    },
};
</script>
