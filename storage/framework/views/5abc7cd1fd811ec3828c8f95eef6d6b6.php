<?php $__env->startSection('seccion1'); ?>
<section>
    <div>
        <h1>Contacto</h1>

        <p>Email: <a href="mailto:danielalamerata1@gmail.com">danielalamerata1@gmail.com</a></p>
        <p>WhatsApp: <a href="https://wa.me/543425233808" target="_blank">+54 3425 233808</a></p>

        <form action="https://formspree.io/f/xljelrpq" method="POST">

            <div>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required minlength="2" maxlength="100">
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="_replyto" required>
            </div>

            <div>
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" required minlength="10"></textarea>
            </div>

            <button type="submit">Enviar</button>
        </form>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base.base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/daniela/Daniela-Lamerata-portfolio/resources/views/contacto.blade.php ENDPATH**/ ?>