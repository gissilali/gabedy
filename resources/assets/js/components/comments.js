/**
 * @TODO  clean up the code
 * Get this file to inline folder
 */

var commentOptions = {
	mounted(){
		var postId = $('#comment-section').attr('data-post-id');
		var context = this;
		axios.get(appDomain+'get-comments/'+postId)
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
			if (loggedIn) {
				var context = this;
			axios.post(appDomain+'respond-to/'+postSlug+'/'+postId, {
				body: context.commentBody
			})
			.then(function (response) {
				console.log(response.data);
				if (response.data==true) {
					context.clearTextField();
					context.fetchComments(postId);
				}
			})
			.catch(function (error) {
			    console.log(error);
			});
			} else {
				Event.$emit('open-authentication-modal');
			}
		},

		fetchComments(postId){
			var context = this;
			axios.get(appDomain+'get-comments/'+postId)
			.then(function (response) {
				console.log(response.data);
				context.comments = response.data;
			})
			.catch(function (error) {
			    console.log(error);
			});
		},

		clearTextField(){
			this.commentBody = '';
		}
	},

	filters: {
		localTime(date){
			 return moment(date + ' Z', 'YYYY-MM-DD HH:mm:ss Z', true).fromNow();
		}
	}
};

export default commentOptions;