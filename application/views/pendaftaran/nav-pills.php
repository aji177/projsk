<template id="nav-pills">
    <ul class="nav nav-pills flex-column flex-sm-row bg-dark rounded" id="nav">
        <li class="flex-sm-fill text-sm-center" v-for="item in vo.items">
            <a :id="'nav-'+item" class="nav-link" :class="vo.view == item?'active':''" href="#" data-toggle="tab" style="text-decoration: none">{{ item }}</a>
        </li>
    </ul>
</template>