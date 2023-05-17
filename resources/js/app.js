import './bootstrap';

import { createApp } from 'vue' 
import CommentIndex from './components/Comment/Index.vue'
import CommentItem from './components/Comment/Item.vue'

createApp({}) 
    .component('comment-list', CommentIndex)
    .component('comment-item', CommentItem)
    .mount('#app') 