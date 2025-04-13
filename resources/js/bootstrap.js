import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import datepicker from "js-datepicker";
window.datepicker = datepicker;

import Swiper from 'swiper/bundle';
window.Swiper = Swiper;

import easydropdown from 'easydropdown';
window.easydropdown = easydropdown;

import Alpine from 'alpinejs';
window.Alpine = Alpine;

Alpine.start();
