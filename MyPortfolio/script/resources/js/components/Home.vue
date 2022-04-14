<template>
    <div>
        <section>
        <div class="hero-area" id="hero" v-bind:style="{ 'background-image': 'url(' + background_image.home_img + ')' }" >
            <div id="particles-js"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <div class="hero-content text-center">
                                <div class="typing-head">
                                    <h3>I Am</h3>
                                </div>
                                <div class="hero-loading-content">
                                    <h1 class="cd-headline clip is-full-width">
                                        
                                      <span class="cd-words-wrapper">
                                          <b  class="is-visible"></b>
                                            <b  v-for="tag_line in tagline" :key="tag_line.id">
                                                <template>{{ tag_line.tag_line }}</template>
                                            </b>  
                                        </span>
                                    </h1>
                                </div>
                                <div  class="hero-social-link">
                                <span v-for="social in socials" :key="social.id">
                                   <a :href="social.link"><i :class="social.icon"></i></a>    
                                </span>
                                </div>
                            </div>
                            <a href="#about">
                                <div class="animation-mouse">
                                    <div class="mouse"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</template>

<script>
export default {
    data(){
        return {
            background_image:'',
            tagline:[],
            socials:[],
        }
    },
    created(){
        this.Index()
       
        
    },

    methods:{
        Index(){
            axios.get('/api/hero')
            .then(
                ({data}) => (                    
                    this.background_image = data.bg_img,
                    this.tagline = data.tagline,
                    this.socials = data.socials
                    )
				)
		  .catch()
        }
    }
}
</script>