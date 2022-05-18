<template>
    <div class="row mt-4">
        <div class="col-lg-2 col-md-4 mb-2" v-for="photo in filteredPhotos">
            <div class="card h-100 pb-0">
                <img class="card-img-top" :src="photo.thumbnailUrl" alt="">
                <div class="card-body">
                    <div class="row">
                        <p class="col-sm-6 fs-6 mb-0">Album ID:</p>
                        <p class="col-sm-6 fs-6 mb-0">Photo ID:</p>
                    </div>
                    <div class="row">
                        <p class="col-sm-6 fs-6">{{ photo.albumId }}</p>
                        <p class="col-sm-6 fs-6">{{ photo.id }}</p>
                    </div>
                    <h6 class="card-title text-sm fw-bold">
                        {{ capitalizeFirstLetter(photo.title) }}
                    </h6>
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