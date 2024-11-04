<script setup lang="ts" generic="T extends { id: stirng | number }">
import { ref } from 'vue';

defineProps<{
    header: string[];
    keys: Array<keyof T>;
    data?: T[];
}>();

const selected = ref([]);

const onClick = (id: string | number) => {
    console.log('click');
    if (selected.value.includes(id)) {
        selected.value.splice(selected.value.indexOf(id), 1);
    } else {
        selected.value.push(id);
    }
};
</script>
<style>
[aria-selected='true'] {
    background-color: blue;
}
</style>
<template>
    <section>
        <header>
            <div v-for="title in header" v-bind:key="title">{{ title }}</div>
        </header>
        <div
            @click="onClick(item.id)"
            :aria-selected="selected.includes(item.id)"
            v-for="item in data"
            v-bind:key="item.id"
        >
            <div v-for="key in keys" v-bind:key="key">
                {{ item[key] }}
            </div>
        </div>
    </section>
</template>
