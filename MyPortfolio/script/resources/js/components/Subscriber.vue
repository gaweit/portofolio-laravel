<template>
    <div>
         <section id="subscriber" class="pt-100">
        <div class="subscriber-area">
            <div class="container pb-100 pt-100">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="subscriber-logo">
                            <span><i class="far fa-envelope-open"></i></span>
                        </div>
                        <div class="subscriber-content">
                            <h1>Get The latest Update by Email</h1>
                            <p>{{settings.subscribe_description}}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-3">
                        <div class="subscriber-form">
                            <form @submit.prevent="Subscribed">
                                <div class="input-form">
                                    <input type="email" placeholder="Enter your email here..." v-model="form.email" required>
                                   
                                        <div class="input-group-append">
                                           
                                            <button type="submit" class="btn">Subscribe</button>
                                        </div>
                                   
                                </div>
                            </form>
                            <p class="text-white text-center" v-if="message==true">Thank you for subscribe</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    </div>
</template>
<style >

</style>
<script>
export default {
    data(){
        return {
            settings:'',
            form:{
			    	email:'',
                },
            message:false    
            
        }
    },
    created(){
        this.Index()    
    },

    methods:{
        Index(){
            axios.get('/api/subscribe')
            .then(
                ({data}) => (                    
                    this.settings = data.settings                    
                    )
				)
		  .catch()
        },

        Subscribed(){
            axios.post('/api/subscribed',this.form)
				.then(success=>{
				this.message=true
				})
				.catch(error=>{
					
					
				})
        }
        
    }
}
</script>