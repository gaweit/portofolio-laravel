<template>
    <div>
         <section id="portfolio">
        <div class="portfolio-area pt-100">
            <div class="portfolio-head-title text-center mb-40">
                <div class="col-lg-6 mx-auto">
                     <h1>My Works</h1>
                     <p>{{description.portfolio_description}}</p>
                </div>
             </div>
             <div class="portfolio-main-area">
                 <div class="container">
                     <div class="">
                         <div class="text-center mx-auto mb-40">
                            <div class="portfolio-category">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="#" data-filter="*">All</a></li>
                                        <li v-for="cat in category" :key="cat.index"><a href="#" :data-filter="['.cat'+cat.id]">{{cat.name}}</a></li>
                                        
                                    </ul>
                                </nav>
                            </div>
                         </div>
                         <div class="row grid portfolio-item">





                            <div  v-for="porto in portfolio" :key="porto.index" :class="['col-lg-4 grid-item mb-30 cat'+porto.cat_id]">
                                <div class="portfolio">
                                   <div class="portfolio-img">
                                        <img :src="'/'+porto.image" alt="">
                                   </div>
                                    <div class="overlay">
                                        <div class="hover-effect">
                                            <div class="icon-hover">
                                                <span><a class="popup" :href="'/'+porto.image"><i class="fas fa-plus-circle"></i></a></span>
                                            </div>
                                            <div class="hover-content">
                                               
                                                <h1>{{porto.title}}</h1>
                                            </div>
                                        </div>
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
            description:'',
            category:[],
            portfolio:[],
        }
    },
    created(){
        this.Index()
       
        
    },

    methods:{
        Index(){
            axios.get('/api/portfolio')
            .then(
                ({data}) => (                    
                    this.description = data.description,
                    this.category = data.category,
                     this.portfolio = data.portfolio
                    )
				)
		  .catch()
        },
        
    }
}
</script>