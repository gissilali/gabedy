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
			context.comments = response.data.data;
			context.paginator.lastPage = response.data.last_page;
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
			comments: {},
			isLoading: false,
			isLoadingMore: false,
			paginator: {
				currentPage: 1,
				perPage: 5,
				lastPage: '',
				lastPageReached: false
			}
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
				this.isLoading = true;
				var context = this;
			axios.post(appDomain+'respond-to/'+postSlug+'/'+postId, {
				body: context.commentBody
			})
			.then(function (response) {
				console.log(response.data);
				if (response.data==true) {
					context.clearTextField();
					context.fetchComments(postId);
					context.isLoading = true;
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
				context.comments = response.data.data;
				context.lastPage = response.data.last_page;
			})
			.catch(function (error) {
			    console.log(error);
			});
		},

		clearTextField(){
			this.commentBody = '';
		},

		loadMore(postId){
			this.isLoadingMore = true;
			var numberOfComments = (this.paginator.currentPage + 1)*this.paginator.perPage;
			var context = this;
			axios.get(appDomain+'get-comments/'+postId+'/'+numberOfComments)
			.then(function (response) {
				context.comments = response.data.data;
				context.paginator.currentPage += 1;
				if (context.paginator.currentPage == context.paginator.lastPage) {
					context.paginator.lastPageReached = true;
					context.isLoadingMore = false;
					return;
				}
				context.isLoadingMore = false;
			})
			.catch(function (error) {
			    console.log(error);
			});
		}
	},

	filters: {
		localTime(date){
			 return moment(date + ' Z', 'YYYY-MM-DD HH:mm:ss Z', true).fromNow();
		},
	}
};

export default commentOptions;