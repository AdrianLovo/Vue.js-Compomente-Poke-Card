Vue.component('poke-card',{
	props: ['name', 'type', 'hp', 'attack','defense','spattack', 'spdefense', 'speed', 'ability1', 'ability2', 'imagen', 'estilo'],
	template: ` 
		<div style="display: inline;">
		  	<figure :class="estilo">
	        	<div class="card__image-container">
	          		<img :src="imagen">
	        	</div>
	        	<figcaption class="card__caption">
	          		<h1 class="card__name">{{name}}</h1>
	          		<h3 class="card__tipo">
	            		{{type}}
	          		</h3>
	          
		        	<table class="card__stats">
		            	<tbody><tr>
		            	<th>HP</th>
		            	<td>{{hp}}</td>
		            	</tr>
		            	<tr>
		            	<th>attack</th>
		            	<td>{{attack}}</td>
		            	</tr>
		            	<tr>
		            	<th>defense</th>
		            	<td>{{defense}}</td>
		            	</tr>
		            	<tr>
		            	<th>Special attack</th>
		            	<td>{{spattack}}</td>
		            	</tr>
		            	<tr>
		            	<th>Special defense</th>
		            	<td>{{spdefense}}</td>
		            	</tr>
		            	<tr>
		            	<th>speed</th>
		            	<td>{{speed}}</td>
		            	</tr>
		            	</tbody>
		          	</table>
	        
	          	<div class="card__abilities">
	            	<h4 class="card__ability">
	              		<span class="card__label">Ability</span>
	              		{{ability1}}
	            	</h4>
	            
	            	<h4 class="card__ability">
	              		<span class="card__label">Hidden Ability</span>
	              		{{ability2}}
	            	</h4>
	          	</div>
        	</figcaption>
	      </figure>
		</div>
	`
})


var vm = new Vue({
	el: '#cards',

	mounted() {
		this.listar();
	},

	data:{

		pokemons: [],
		mensaje: '',
	},

	methods:{

		listar() {
			axios.get('../DAO/DAOPokemon.php',{
				params:{
	    			'funcion': 1,
	    		}
			})
			.then((respuesta) => {
				this.pokemons = respuesta.data;				
			})
		},	    	
	},

})	




