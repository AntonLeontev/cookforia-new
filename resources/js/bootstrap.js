import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Swiper from 'swiper';
window.Swiper = Swiper;

import easydropdown from 'easydropdown';
window.easydropdown = easydropdown;

import Alpine from 'alpinejs';
window.Alpine = Alpine;

Alpine.start();
