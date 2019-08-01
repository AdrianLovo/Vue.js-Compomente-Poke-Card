Vue.component('poke-card',{
	props: ['name', 'type','hp', 'attack','defense','spattack', 'spdefense', 'speed', 'ability1', 'ability2', 'imagen', 'estilo'],
	template: ` 
		<div style="display: inline;">
		  	<figure :class="estilo">
	        	<div class="card__image-container">
	          		<img :src="imagen">
	        	</div>
	        	<figcaption class="card__caption">
	          		<h1 class="card__name">{{name}}</h1>
	          		<h3 class="card__type">
	            		{{type}}
	          		</h3>
	          
		        	<table class="card__stats">
		            	<tbody><tr>
		            	<th>HP</th>
		            	<td>{{hp}}</td>
		            	</tr>
		            	<tr>
		            	<th>Attack</th>
		            	<td>{{attack}}</td>
		            	</tr>
		            	<tr>
		            	<th>Defense</th>
		            	<td>{{defense}}</td>
		            	</tr>
		            	<tr>
		            	<th>Special Attack</th>
		            	<td>{{spattack}}</td>
		            	</tr>
		            	<tr>
		            	<th>Special Defense</th>
		            	<td>{{spdefense}}</td>
		            	</tr>
		            	<tr>
		            	<th>Speed</th>
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

	data:{

		Pokemons: [
			{name: "Eevee", imagen: "Resources/img/1200px-133Eevee.png", type: "normal", hp: 55, attack: 55, defense: 50, spattack: 45, spdefense: 65, speed: 55, ability1: "Run Away", ability2: "Anticipation", estilo: "card card--normal"},
		    {name: "Vaporeon", imagen: "Resources/img/1200px-134Vaporeon.png", type: "water", hp: 130, attack: 65, defense: 60, spattack: 110, spdefense: 95, speed: 65, ability1: "Absorb", ability2: "Hydration", estilo: "card card--water"},
		    {name: "Jolteon", imagen: "Resources/img/1200px-135Jolteon.png", type: "electric", hp: 65, attack: 65, defense: 60, spattack: 110, spdefense: 95, speed: 130, ability1: "Volt Absorb", ability2: "Quick Feet", estilo: "card card--electric"}, 
		    {name: "Flareon", imagen: "Resources/img/1200px-136Flareon.png", type: "fire", hp: 65, attack: 130, defense: 60, spattack: 95, spdefense: 110, speed: 65, ability1: "Flash Fire", ability2: "Guts", estilo: "card card--fire"}, 
		    {name: "Espeon", imagen: "Resources/img/1200px-196Espeon.png", type: "psychic", hp: 65, attack: 65, defense: 60, spattack: 130, spdefense: 95, speed: 110, ability1: "Synchronize", ability2: "Magic Bounce", estilo: "card card--psychic"},
		    {name: "Umbreon", imagen: "Resources/img/600px-197Umbreon.png", type: "dark", hp: 95, attack: 65, defense: 110, spattack: 60, spdefense: 130, speed: 65, ability1: "Synchronize", ability2: "Inner Focus", estilo: "card card--dark"},
		    {name: "Leafeon", imagen: "Resources/img/600px-470Leafeon.png", type: "grass", hp: 65, attack: 110, defense: 130, spattack: 60, spdefense: 65, speed: 95, ability1: "Leaf Guard", ability2: "Chlorophyll", estilo: "card card--grass"},
		    {name: "Glaceon", imagen: "Resources/img/600px-471Glaceon.png", type: "ice", hp: 65, attack: 60, defense: 110, spattack: 130, spdefense: 95, speed: 65, ability1: "Snow Cloak", ability2: "Ice Body", estilo: "card card--ice"},
		    {name: "Sylveon", imagen: "Resources/img/600px-700Sylveon.png", type: "fairy", hp: 95, attack: 65, defense: 65, spattack: 110, spdefense: 130, speed: 60, ability1: "Cute Charm", ability2: "Pixilate", estilo: "card card--fairy"},
		],
	},

	template:`
		<div>
			<poke-card 
	          	v-for="(pokemon, index) in Pokemons"
	          	:key="index"
	          	:name="pokemon.name"       
	          	:type="pokemon.type"       
	          	:hp="pokemon.hp"
	          	:attack="pokemon.attack"
	          	:defense="pokemon.defense"
	          	:spattack="pokemon.spattack"
	          	:spdefense="pokemon.spdefense"
	          	:speed="pokemon.speed"
	          	:ability1="pokemon.ability1"
	          	:ability2="pokemon.ability2"
	          	:imagen="pokemon.imagen"
	        	:estilo="pokemon.estilo"
	    	></poke-card>
    	</div>`
})




