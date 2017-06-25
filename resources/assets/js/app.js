
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
require('./functions');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/**
 * Extracted the vue object to component file
 */
import commentOptions from './components/comments';

Vue.component('comment-section', commentOptions);
Vue.component('like-button', require('./components/LikeButton'));
const app = new Vue({
    el: '#app'
});