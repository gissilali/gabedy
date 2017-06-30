import commentOptions from './components/comments';
import bookmark from './components/bookmark';
import articleSearch from './components/articleSearch';
import authModal from './components/authModal';
import updateProfileOptions from './components/updateProfile';


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

window.Vue = require('vue');
window.appDomain = 'http://localhost:8000/';
window.Event = new Vue();
Vue.use(require('vue-moment'));
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('comment-section', commentOptions);
Vue.component('bookmark-button', bookmark);
Vue.component('article-search', articleSearch);
Vue.component('auth-modal', authModal);
Vue.component('update-profile-form', updateProfileOptions);
Vue.component('like-button', require('./components/LikeButton'));

const app = new Vue({
    el: '#app'
});