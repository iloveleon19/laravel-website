<template>
    <header id="header" class="alt">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" v-for="(brand,index) in brands" :key="index" :href="brand.link_url"> {{ brand.title }} </a>

            <button class="navbar-toggler" 
                type="button" 
                data-toggle="collapse" 
                data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item" v-for="(item,index) in menuItems" :key="index" :class="{active:item.isActive, dropdown:item.isDropdown}">
                        <a v-if="!item.isDropdown" 
                            class="nav-link" 
                            :class="{disabled:item.isDisabled}" 
                            :href="item.link_url">
                            {{ item.title }} <span class="sr-only">(current)</span>
                        </a>

                        <a v-if="item.isDropdown" 
                            class="nav-link dropdown-toggle" 
                            :class="{disabled:item.isDisabled}" 
                            :href="item.link_url" 
                            :id="'navbarDropdown-'+index" 
                            role="button" 
                            data-toggle="dropdown" 
                            aria-haspopup="true" 
                            aria-expanded="false">
                            {{ item.title }} <span class="sr-only">(current)</span>
                        </a>

                        <div v-if="item.isDropdown" class="dropdown-menu" :aria-labelledby="'navbarDropdown-'+index">
                            <div v-for="(subItem,index) in item.dropdownItems" :key="index">
                                <a class="dropdown-item" :href="subItem.link_url"> {{ subItem.title }} </a>
                                
                                <div v-if="typeof(item.dropdownItems[index+1])!='undefined' && item.dropdownItems[index+1].divider-subItem.divider!=0" 
                                    class="dropdown-divider">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0" v-for="(search,index) in searchItems" :key="index">
                    <input class="form-control mr-sm-2" type="search" :placeholder="search.placeholder" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> {{ search.title }} </button>
                </form>
            </div>
        </nav>
    </header>
</template>

<script>
    export default {
        data() {
            return {
                brands:[],
                menuItems:[],
                searchItems:[],
            }
        },
        mounted() {
            function getBrandData() {
                return axios.get('/getBrandData',{
                        params:{}
                    });
            }
            function getMenuItem() {
                return axios.get('/getMenuItem',{
                        params:{}
                    });
            }
            function getSearchItems() {
                return axios.get('/getSearchItems',{
                        params:{}
                    });
            }
            axios.all([getBrandData(), getMenuItem(), getSearchItems()])
                .then(axios.spread((resBrand, resMenu, resSeach)=>{
                    resMenu.data.forEach((element,index) => {
                        element.isDropdown = element.isDropdown==='1' ? true : false;
                        element.isDisabled = element.isDisabled==='1' ? true : false;
                        element.isActive = element.isActive==='1' ? true : false;
                    });
                    
                    this.brands = resBrand.data;
                    this.menuItems = resMenu.data;
                    this.searchItems = resSeach.data;
                }))
                .catch(error => {
                    console.log(error);
                });

            console.log('HeaderComponent Component mounted.');
        }
    }
</script>
