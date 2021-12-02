import Home from "./pages/frontend/index.vue"
import Menu from "./pages/frontend/menu.vue"
import EditMenu from "./pages/frontend/editMenu.vue"

const routes = [{
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/menu',
        name: 'Menu',
        component: Menu
    },
    {
        path: '/menu/edit/:id',
        name: 'EditMenu',
        component: EditMenu
    },
]

export default routes