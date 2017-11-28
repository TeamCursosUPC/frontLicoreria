<li class="treeview active">
  <a href="#">
    <i class="fa fa-phone-square"></i> <span>Mantenimiento</span> <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="treeview-menu">
    <li><a href="#" v-on:click="loadOptionMenu('clientes')"> <i class="fa fa-circle-o text-green"></i>  Listar Clientes</a></li>
    <li><a  href="#" v-on:click="loadOptionMenu('locales')"> <i class="fa fa-circle-o text-blue"></i> Listar Locales</a></li>
    <li><a href="#" v-on:click="loadOptionMenu('clientes')"> <i class="fa fa-circle-o text-yellow"></i> Listar Productos</a></li>
    <li><a href="#" v-on:click="loadOptionMenu('usuarios')"> <i class="fa fa-circle-o text-red"></i> Listar Usuarios</a></li>
  </ul>
</li>

<li class="treeview ">
  <a href="#">
    <i class="fa fa-gears"></i> <span>Pedidos</span> <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="treeview-menu">
    <li><a href="/pedidos"> <i class="fa fa-circle-o text-purple"></i> Pedidos Online</a></li>
  </ul>
</li>
