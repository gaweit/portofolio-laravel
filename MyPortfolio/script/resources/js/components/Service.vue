<template>
    <div>
         <section  id="service" class="pt-100">
        <div class="service-area">
            <div class="service-head-title text-center mb-40 pt-100">
               <div class="col-lg-6 mx-auto">
                    <h1>My Service</h1>
                    <p>{{settings.service_description}}</p>
               </div>
            </div>
            <div class="service-main-content pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4" v-for="service in services" :key="service.index">
                            <div class="single-service text-center">
                                <div class="service-border">
                                    <div class="service-img">
                                        <img class="img-fluid" :src="'/'+service.icon" alt="">
                                    </div>
                                    <div class="service-content">
                                        <h4>{{service.title}}</h4>
                                        <p>{{service.description}}</p>
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
            settings:'',
            services:[],
            
        }
    },
    created(){
        this.Index()
       
        
    },

    methods:{
        Index(){
            axios.get('/api/service')
            .then(
                ({data}) => (                    
                    this.settings = data.settings,
                    this.services = data.services
                    )
				)
		  .catch()
        },
        
    }
}
</script>