<template>
    <div>
         <section id="contact">
        <div class="contact-area pt-100">
            <div class="contact-head-title text-center mb-40">
                <div class="col-lg-6 mx-auto">
                     <h1>Contact Us</h1>
                     <p>{{settings.contact_description}}</p>
                </div>
             </div>
             <div class="container">
                 <div class="row mt-5">
                     <div class="col-lg-4">
                        <div class="text-center">
                            <div class="single-contact-info">
                                <i class="fas fa-mobile-alt"></i>
                                <div class="info mt-3">
                                    <h5>Call Us On</h5>
                                    <p>{{contacts.phone}}</p>
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="text-center">
                            <div class="single-contact-info">
                                <i class="far fa-envelope"></i>
                                <div class="info mt-3">
                                    <h5>Email Us At</h5>
                                    <p>{{contacts.email}}</p>
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="text-center">
                            <div class="single-contact-info">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="info mt-3">
                                    <h5>Visit Office</h5>
                                    <p>{{contacts.address}}</p>
                                </div>
                            </div>
                        </div>
                     </div>
                 </div>
                 <div class="row mt-5">
                     <div class="col-lg-12">
                        <div class="contact-form">
                            <form action="#" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name*" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Email*" name="email">
                                        </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Subject..*" name="subject">
                                        </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Your Message.."></textarea>
                                        </div>
                                    </div>
                                 </div>
                                 <button type="submit" class="btn f-right">Send Message</button>
                             </form>
                             <div class="ajax-response"></div>
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
            contacts:''
            
            
        }
    },
    created(){
        this.Index()
       
        
    },

    methods:{
        Index(){
            axios.get('/api/contact')
            .then(
                ({data}) => (                    
                    this.settings = data.settings,
                    this.contacts = data.contacts
                  
                    )
				)
		  .catch()
        },
        
    }
}
</script>