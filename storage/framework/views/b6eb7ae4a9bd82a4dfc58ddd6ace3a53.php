

<?php $__env->startSection('seccion1'); ?>
<section class="hero">
    <p class="hero-saludo">Hola, soy</p>
    <h1 class="hero-nombre">Daniela Lamerata</h1>
    <h2 class="hero-titulo">Desarrolladora Web</h2>
    <p class="hero-descripcion">
        Estudiante de Desarrollo de Software en ITEC El Molino. 
        Construyo sitios y aplicaciones web con atención al detalle 
        y siempre aprendiendo algo nuevo.
    </p>
    <div class="hero-botones">
        <a href="/proyectos" class="btn-principal">Ver proyectos</a>
        <a href="/contacto" class="btn-secundario">Contactame</a>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base.base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\proyectos\portfolio-lavarel\resources\views/index.blade.php ENDPATH**/ ?>