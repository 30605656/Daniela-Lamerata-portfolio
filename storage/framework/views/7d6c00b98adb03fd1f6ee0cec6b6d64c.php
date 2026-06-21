

<?php $__env->startSection('seccion1'); ?>
<section>
    <div>
        <h1>Proyectos</h1>

        <?php $__empty_1 = true; $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div>
                <h2><?php echo e($proyecto->titulo); ?></h2>
                <p><?php echo e($proyecto->descripcion); ?></p>
                <p><strong>Tecnologías:</strong> <?php echo e($proyecto->tecnologias); ?></p>
                <?php if($proyecto->url): ?>
                    <a href="<?php echo e($proyecto->url); ?>" target="_blank">Ver proyecto</a>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>No hay proyectos todavía.</p>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base.base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\proyectos\portfolio-lavarel\resources\views/proyectos.blade.php ENDPATH**/ ?>