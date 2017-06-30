var articleSearch = {
	data(){
		return {
			query: '',
			results: []
		}
	},

	computed: {
		resultsAvailable(){
			if (this.results.length > 0) {return true} else {return false}
		},
	},

	methods: {
		sendSearchRequest(){
			var context = this;
			axios.get(appDomain+'/search/', {
				params: {
			      q: context.query
			    }
			})
			.then(function(response){
				context.results = response.data;
			})
		},

		postURL(slug, id){
			return appDomain+'read/'+slug+'/'+id;
		}
	}
}

export default articleSearch;