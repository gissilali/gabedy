var updateProfileOptions = {
	props: ['userId'],

	mounted(){
		var context = this;
		console.log(this.userId);
		axios.get(appDomain+'settings/'+this.userId)
		.then(function(response){
			context.name = response.data.name;
			context.email = response.data.email;
		})
		.catch(function(response){

		});
	},

	data() {
		return {
			name: '',
			email: '',
			sumitable: {
				
			}
		}
	}
}

export default updateProfileOptions;