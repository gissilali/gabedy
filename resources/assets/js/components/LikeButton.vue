<template>
	<div class="like">
		<button class="fa fa-heart like-button"  @click.prevent="unLike(commentId)" v-if="liked"></button>
		<button class="fa fa-heart-o like-button"  @click.prevent="like(commentId)" v-else></button>
		<span class="like-count">{{ likesCount }}</span>
	</div>
</template>
<script>
	export default {
		props:['commentId'],

		mounted(){
			var context = this;
			axios.get('/is-liked/'+context.commentId)
			.then(function(response){
				if(response.data == true){
					console.log(response.data);
					context.liked = true;
				} else{
					context.liked = false;
				}
			});
		},

		created(){
			var context = this;
			axios.get('/likes-count/'+context.commentId)
			.then(function(response){
					context.likesCount = response.data;
			});
		},

		data(){
			return {
				liked: false,
				likesCount: ''
			}
		},

		methods: {
			like(commentId){
				if (loggedIn) {
					var context = this;
					axios.post('/like/'+commentId)
					.then(function(response){
					if(response.data == true){
						context.countLikes();
						context.liked = true;
					}
				})
				.catch(function(error){

				});
				} else {
					Event.$emit('open-authentication-modal');
				}
			},

			unLike(commentId){
				if (loggedIn) {
					var context = this;
					axios.post('/unlike/'+commentId)
					.then(function(response){
					if(response.data == false){
						context.countLikes();
						context.liked = false;
					}
				})
				.catch(function(error){

				});
				} else {
					Event.$emit('open-authentication-modal');
				}
			},

			countLikes(){
				var context = this;
				axios.get('/likes-count/'+context.commentId)
				.then(function(response){
						context.likesCount = response.data;
				});
			}
		}
	}
</script>
<style>
	.like-button{
		color:#2ab27b;
	}
</style>