<template>
	<div class="auth-modal" v-if="openModal">
		<div class="form-page-centering">
			<div class="container">
				<div class="col-md-4 col-md-offset-4">
					<div class="form-container">
						<div class="form-logo-heading clearfix">
							<div class="logo-container">
								<img src="logo.svg" alt="gabedy-logo">	
							</div>
						</div>
						<div class="panel panel-default form-panel">
							<div class="panel-heading">
								<button class="close fa fa-times" @click.prevent="closeModal()"></button>
								<h4 class="form-title">Almost there!</h4>
							</div>
							<div class="panel-body">
								<p><strong>Sign in to your account or create a new one to start interacting</strong></p>
							</div>
							<div class="panel-footer clearfix">
								<div class="col-md-6">
									<a href="Login" class="btn __btn __btn-green  __btn-cta"><strong>login</strong></a>
								</div>
								<div class="col-md-6">
									<a href="Login" class="btn __btn __btn-blue __btn-cta"><strong>register</strong></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
	export default {
		mounted(){
			var context = this;
			Event.$on('open-authentication-modal', function(){
				context.openModal = true;
			});
		},

		data(){
			return {
				openModal: false
			}
		},

		methods: {
			closeModal(){
				this.openModal = false;
			}
		}
	}
</script>
<style scoped>
	.auth-modal{
		width:100vw;
		height:100vh;
		background: rgba(255,255,255,0.5);
		position: fixed;
		z-index:1000000;
	}
	.form-panel{
		text-align: center;
	}
	.panel-footer{
		background: white;
		border-top:none;
	}
	.__btn-cta{
		min-width: 100%;
	}
</style>