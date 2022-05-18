<template>
    <div class="row mt-4">
        <div class="col-lg-4 col-md-4 mb-2" v-for="photo in filteredPhotos">
            <div class="card h-100 pb-0">
                <img class="card-img-top" :src="photo.thumbnailUrl" alt="">
                <div class="card-body">
                    <h6 class="card-title text-sm fw-bold">
                        {{ capitalizeFirstLetter(photo.title) }}
                    </h6>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <p class="card-text col-sm-6 mb-0"><small class="text-muted">Album: {{ photo.albumId }}</small></p>
                        <p class="card-text col-sm-6 mb-0"><small class="text-muted">Photo: {{ photo.id }}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        filteredPhotos: Array
    },

    methods: {
        capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }
    }
}

</script>