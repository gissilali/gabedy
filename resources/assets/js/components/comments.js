/**
 * @TODO  clean up the code
 * Get this file to inline folder
 */

var commentOptions = {
	mounted(){
		var postId = $('#comment-section').attr('data-post-id');
		var context = this;
		axios.get('/get-comments/'+postId)
		.then(function (response) {
			console.log(response.data);
			context.comments = response.data;
		})
		.catch(function (error) {
		    console.log(error);
		});
	},

	data(){
		return {
			postId: '',
			postSlug: '',
			commentBody: '',
			comments: {}
		}
	},

	computed: {
		commentValid(){
			if (this.commentBody.trim().length < 1) {
				return false;
			} else {
				return true;
			}
		}
	},

	methods: {
		onSubmit(postSlug, postId) {
			var context = this;
			axios.post('/respond-to/'+postSlug+'/'+postId, {
				body: context.commentBody
			})
			.then(function (response) {
				console.log(response.data);
				if (response.data==true) {
					context.fetchComments(postId);
				}
			})
			.catch(function (error) {
			    console.log(error);
			});
		},

		fetchComments(postId){
			var context = this;
			axios.get('/get-comments/'+postId)
			.then(function (response) {
				console.log(response.data);
				context.comments = response.data;
			})
			.catch(function (error) {
			    console.log(error);
			});
		}
	}
};

export default commentOptions;