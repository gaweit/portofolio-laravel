<template>
    <div>

        <section id="testimonials" class="pt-65">
        <div class="testimonials-area">
            <div class="container">
                <div class="row owl-carousel">

                    <div class="col-lg-10 mx-auto pt-100 pb-100" v-for="review in reviews" :key="review.index">
                        <div class="testimonials-main-content text-center">
                            <div class="testi-description">
                                <p>{{review.review}}</p>
                            </div>
                            <div class="testi-profile">
                                <img  :src="review.avatar"  alt="">
                            </div>
                            <div class="testi-author-name">
                                <h4>{{review.name}}</h4>
                                <small>{{review.position}}</small>
                            </div>
                        </div>
                    </div>
                 
                    
                </div>
            </div>
        </div>
    </section>
    </div>
</template>
<style lang="stylus" scoped>

</style>
<script>
export default {
    data(){
        return {
            settings:'',
            reviews:[],
            
        }
    },
    created(){
        this.Index()    
    },

    methods:{
        Index(){
            axios.get('/api/testimonial')
            .then(
                ({data}) => (                    
                    this.settings = data.settings,
                    this.reviews = data.reviews
                    
                    )
				)
		  .catch()
        },
        
    }
}
</script>
