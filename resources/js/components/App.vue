<template>
    <div>
        <header-bar></header-bar>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 pt-4">
                    <album-list :albums="albums" @input="onSelected"></album-list>
                </div>

                <div class="col-lg-12">
                    <photo-list :filteredPhotos="filteredPhotos"></photo-list>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import HeaderBar from './HeaderBar.vue'
import AlbumList from './AlbumList.vue'
import PhotoList from './PhotoList.vue'

export default {
    components: {
        HeaderBar,
        AlbumList,
        PhotoList
    },

    data() {
        return {
            albums: [],
            photos: [],
            selected: ''
        }
    },

    computed: {
        filteredPhotos() {
            let tempPhotos = this.photos

            tempPhotos = tempPhotos.filter((photo) => {
                return (photo.albumId == this.selected)
            })

            return tempPhotos
        }
    },

    created() {
        this.loadAlbums();
        this.loadPhotos();
    },

    methods: {
        loadAlbums: function () {
            axios.get('/api/albums')
                .then((response) => {
                    this.albums = response.data.data;
                })
                .catch(function (error) {
                    console.log(error);
                })
        },

        loadPhotos: function() {
            axios.get('/api/photos')
            .then((response) => {
                this.photos = response.data.data;
            })
            .catch( function (error) {
                console.log(error);
            })
        },

        onSelected(value) {
            this.selected = value;
        }
    }
}
</script>
