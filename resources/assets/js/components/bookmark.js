var bookmark = {
	props:['postId'],

	mounted(){
		var context = this;
		axios.get(appDomain+'is-bookmarked/'+context.postId)
		.then(function(response){
			if(response.data == true){
				console.log(response.data);
				context.bookmarked = true;
			} else{
				context.bookmarked = false;
			}
		});
	},

	data(){
		return {
			bookmarked: false,

		}
	},

	methods: {
		bookmark(postId){
			if (loggedIn) {
				var context = this;
				axios.post(appDomain+'bookmark/'+postId)
				.then(function(response){
					if(response.data == true){
						context.bookmarked = true;
						location.reload();
					}
				})
				.catch(function(error){

				});
			} else {
				Event.$emit('open-authentication-modal');
			}
		},

		unbookmark(postId){
			var context = this;
			axios.post('/unbookmark/'+postId)
			.then(function(response){
				if(response.data == false){
					context.bookmarked = false;
				}
			})
			.catch(function(error){

			});
		},

	}
}

export default bookmark;