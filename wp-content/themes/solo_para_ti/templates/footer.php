<footer class="content-info">
    <div class="container">
        <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>

    <?php query_posts('post_type=footer');
    while (have_posts()) : the_post(); ?>


    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-2">
                <div class="content_logo">

                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="col-sm-6">
                    <h2>Información</h2>
                    <div class="content content_items">
                        <?php
                        $informacionItemes = get_group('informacion_item');
                        foreach($informacionItemes as $key => $element){
                            print "<a href=".$element['informacion_item_info_url'][1].">". $element['informacion_item_info_titulo'][1] ."</a>";
                        }
                        ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h2>Ayuda</h2>
                    <div class="content content_items">
                        <?php
                        $elements = get_group('ayuda');
                        foreach($elements as $key => $element){
                            print "<a href=".$element['ayuda_item_url'][1].">". $element['ayuda_item_titulo'][1] ."</a>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3">
                <h2>Contactenos</h2>
                <div class="content content_direccion">
                    <p><?php echo get('contactenos_footer_direccion'); ?></p>
                </div>
                <div class="content content_correo">
                    <p><?php echo get('contactenos_footer_correo'); ?></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3">
                <br><br><br>
                <div class="content content_telefono">
                    <p><?php echo get('contactenos_footer_telefonos'); ?></p>
                </div>
                <div class="content content_btn_footer">
                    <?php
                    $elements = get_group('quieres_footer');
                    foreach($elements as $key => $element){
                        print "<a href=".$element['quieres_footer_btn_url'][1].">". $element['quieres_footer_btn_titulo'][1] ."</a>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile; ?>
</footer>


