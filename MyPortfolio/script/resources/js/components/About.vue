<template>
    <div>
            <section id="about">
        <div class="about-area pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 valign">
                        <div class="content mb-50">
                            <div class="section-head text-left mb-30">
                                <h1>About <span>ME</span></h1>
                                <span class="span"></span>
                            </div>
                            <p>{{about.description}}</p>
                            <a :href="about.cv" class="btn mt-30">Download C.V</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-hero-img">
                            <img data-tilt class="img-fluid" :src="'/'+about.image" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="content mb-50">
                            <div class="skills-head-type">
                                <h1>Professional skills.</h1>
                            </div>                              
                                <div class="single-progress-bar" v-for="skill in skills" :key="skill.index">
                                    <div class="progressbar-label">
                                        <h5>{{skill.name}} <span class="f-right">{{skill.percent}}%</span></h5>
                                        <div class="progress">
                                        <div :class="['progress-bar w-'+ skill.percent]" role="progressbar" :aria-valuenow="skill.percent" aria-valuemin="0" aria-valuemax="100"></div>
                                         
                                         <!-- <div class="progress-bar w-92" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div> -->
                                        </div>
                                    </div>
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
            about:'',
            skills:[],
            
        }
    },
    created(){
        this.Index()
       
        
    },

    methods:{
        Index(){
            axios.get('/api/about')
            .then(
                ({data}) => (                    
                    this.about = data.about,
                    this.skills = data.skill
                    )
				)
		  .catch()
        }
    }
}
</script>