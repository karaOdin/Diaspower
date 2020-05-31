<template>
	<div>
		<div class="form-group">
            <label>Etat:</label>
            <select class='form-control' v-model='country' @change='loadCities()'>
              <option value='0' >Etat</option>
              <option v-for='data in countries' :value='data.id'>{{ data.country }}</option>
            </select>
        </div>
                        
        <div class="form-group">
            <label>Ville:</label>
            <select class='form-control' v-model='city' name="city_id">
              <option value='0' >Ville</option>
              <option v-for='data in cities' :value='data.id'>{{ data.city }}</option>
            </select>
        </div>
	</div>
</template>

<script>
	export default{
		data(){
			return{
				country: 0,
                countries: [],
                city: 0,
                cities: []
			}
		},
		created(){
			this.getCountries();
		},
		methods:{
			getCountries: function(){
              axios.get('/api/Country')
              .then(function (response) {
                 this.countries = response.data;
              }.bind(this));
         
            },

			loadCities() {
                axios.get('/api/City',{
                 params: {
                   country_id: this.country
                 }
              }).then(function(response){
                    this.cities = response.data;
                }.bind(this));
            }
			
		}
	}
	
</script>