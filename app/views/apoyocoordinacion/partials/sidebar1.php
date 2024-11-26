   <!-- sidebar -->
   <div id="sidebar" class="hidden w-1/5 bg-primaryDark md:block">
      <!-- menu sidebar -->
      <div id="sidebar-menu" class="">
         <ul class="link-items flex flex-col py-3 space-y-2">

            <li class="link-item">
               <div class="p-4 bg-primaryDark">
                  <img src="<?php echo URLROOT; ?>/img/logo-bco.png" alt='Logo PerTi'>
               </div>
            </li>

            <li class="link-item active w-auto text-dark ml-4 p-4 rounded-l-xl bg-neutralLight hover:bg-ctaLight hover:text-white">
               <a href="<?php echo URLROOT; ?>//index" class="font-bold px-2">
                  <i class="fa-solid fa-home fa-1x px-2"></i> Inicio
                  </a>
            </li>

             <li class="link-item w-auto text-white ml-4 p-4 rounded-l-xl hover:bg-ctaLight">
               <a href="<?php echo URLROOT; ?>//listado_clientes" class="font-bold px-2">
                  <i class="fa-solid fa-home fa-1x px-2"></i> Clientes
               </a>
            </li>

            <li class="link-item w-auto text-white ml-4 p-4 rounded-l-xl hover:bg-ctaLight">
               <a href="<?php echo URLROOT; ?>//lista_cartera" class="font-bold px-2">
                  <i class="fa-solid fa-home fa-1x px-2"></i> Cartera
               </a>
            </li>

            <li class="link-item w-auto text-white ml-4 p-4 rounded-l-xl hover:bg-ctaLight">
               <a href="<?php echo URLROOT; ?>//contratos_candidatos" class="font-bold px-2">
                  <i class="fa-solid fa-home fa-1x px-2"></i> Contratos
               </a>
            </li>

            <li class="link-item w-auto text-white ml-4 p-4 rounded-l-xl hover:bg-ctaLight">
               <a href="<?php echo URLROOT; ?>/" class="font-bold px-2">
                  <i class="fa-solid fa-home fa-1x px-2"></i> 
               </a>
            </li>     

         </ul>
      </div>
   </div>















<!-- <nav class='side-nav'>
    <a href='' class='intro-x flex items-center pl-5 pt-4'>
        <img alt='Logo PerTi' class='' src="<?php echo URLROOT; ?>/img/logo-bco.png"  style='width: 85%;'>    
    </a>
    <div class='side-nav__devider my-6'></div>
    <ul>
        <li>
            <a href='<?php echo URLROOT; ?>/reclutadores/index' class='side-menu' id='menuDashboard'>
                <div class='side-menu__icon'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' icon-name='home' data-lucide='home' class='lucide lucide-home'><path d='M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z'></path><polyline points='9 22 9 12 15 12 15 22'></polyline></svg>
                </div>
                <div class='side-menu__title'>  Dashboard  </div>
            </a>
        </li>
        <div class='side-nav__devider my-6'></div>
        <li>
            <a href='<?php echo URLROOT; ?>/reclutadores/listado_clientes' class='side-menu' id='menuUsuarios'>
                <div class='side-menu__icon'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' icon-name='users' data-lucide='users' class='lucide lucide-users'><path d='M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2'></path><circle cx='9' cy='7' r='4'></circle><path d='M23 21v-2a4 4 0 00-3-3.87'></path><path d='M16 3.13a4 4 0 010 7.75'></path></svg>
                </div>
                <div class='side-menu__title'>clientes</div>
            </a>
            <a href='<?php echo URLROOT; ?>/reclutadores/lista_candidato' class='side-menu' id='menuPermisos'>
                <div class='side-menu__icon'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' icon-name='lock' data-lucide='lock' class='lucide lucide-lock block mx-auto'><rect x='3' y='11' width='18' height='11' rx='2' ry='2'></rect><path d='M7 11V7a5 5 0 0110 0v4'></path></svg>
                </div>
                <div class='side-menu__title'>requerimiento candidato</div>
            </a>
            <a href='<?php echo URLROOT; ?>/reclutadores/lista_cartera' class='side-menu' id='menuVercandidatos'>
                <div class='side-menu__icon'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' icon-name='lock' data-lucide='lock' class='lucide lucide-lock block mx-auto'><rect x='3' y='11' width='18' height='11' rx='2' ry='2'></rect><path d='M7 11V7a5 5 0 0110 0v4'></path></svg>
                </div>
                <div class='side-menu__title'>cartera</div>
            </a>
            <a href='<?php echo URLROOT; ?>/reclutadores/contratos_candidatos' class='side-menu' id='menuClientes'>
                <div class='side-menu__icon'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' icon-name='lock' data-lucide='lock' class='lucide lucide-lock block mx-auto'><rect x='3' y='11' width='18' height='11' rx='2' ry='2'></rect><path d='M7 11V7a5 5 0 0110 0v4'></path></svg>
                </div>
                <div class='side-menu__title'>Registro contratos</div>
            </a>
        
            </a>
        </li>
    </ul>
</nav> -->