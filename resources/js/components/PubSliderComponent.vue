<template>
        <div class="col-lg-3 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Publicités</h5>
                        </div>
                        <div class="col-3">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item mr-0 font-12"><a href="#"><i class="feather icon-refresh-cw font-16 text-primary ml-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <slide v-for="pub in pubs" :key="pub.id">
                            <img v-if="pub.image" style="height: 200px; width: 100%" :src="pub.image" alt="">
                            <video controls autoplay name="media" style="height: 200px; width: 100%" v-else :src="pub.video" type="video/mp4"></video>
                        </slide>
                        <button class="next" @click="next">Next</button>
                        <button class="prev" @click="prev">Prev</button>   
                    </div>
                </div>
            </div>
        </div>
</template>

<script>

import Slide from "./Slide";

export default {
    props: ['pubs'],
    components: {
        Slide
    },
    data(){
        return {
            visible: 0,
            index: 0,
            slides: []
        }
    },
    methods: {
        next() {
            this.index++
            if(this.index >= this.slidesCount) {
                this.index = 0
            }
        },
        prev() {
            this.index--
            if(this.index < 0) {
                this.index = this.slidesCount - 1
            }
        },
        changeSlide() {
            console.log('Bonjour')
        }
    },
    computed: {
        slidesCount() { return this.slides.length }
    },
    mounted () {

        this.slides = this.$children
        this.slides.forEach((slide, i) => {
            slide.index = i
        }); 
        
        this.changeSlide()
        // Intel HD Graphics   
    }
}
</script>
<style>
    .carousel {
        position: relative;
        width: 600px;
        height: 350px;
        overflow: hidden;
    }
    button {
        position: absolute;
        height: 40;
        width: 50px;
        top: calc(50% - 20px);
        background-color: black;
        border: none;
        color: #FFF;
    }
    .next {
        right: 0;
    }
    .prev {
        left: 0;
    }
</style>
