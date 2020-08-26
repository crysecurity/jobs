import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import ru from 'vuetify/es5/locale/ru'
import 'material-design-icons-iconfont/dist/material-design-icons.css';
import '@mdi/font/css/materialdesignicons.css';

Vue.use(Vuetify)

const opts = {
    lang: {
        locales: { ru },
        current: 'ru'
    }
}

export default new Vuetify(opts)
