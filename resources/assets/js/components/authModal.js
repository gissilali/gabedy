var authModal = {
	mounted(){
			var context = this;
			Event.$on('open-authentication-modal', function(){
				context.openModal = true;
				context.modalClosed = false;
			});
		},

		data(){
			return {
				openModal: false,
				modalClosed: true
			}
		},

		methods: {
			closeModal(){
				this.openModal = false;
				this.modalClosed = true;
			}
		}
}

export default authModal;