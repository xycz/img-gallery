<template>
    <div>
        <select class="form-select" v-model="selected" v-on:input="$emit('input', $event.target.value)">
            <option disabled value="">Select an album...</option>
            <option v-for="album in albums" 
                    v-bind:value="album.id" 
                    :key="album.id">
                {{ album.id }}: {{ capitalizeFirstLetter(album.title) }}
            </option>
        </select>
    </div>
</template>

<script>
export default {
    props: {
        value: String,
        albums: Array
    },

    data() {
        return {
            selected: ''
        }
    },

    methods: {
        capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }
    }
}
</script>