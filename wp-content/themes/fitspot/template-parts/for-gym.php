
<div id="gym">
    <div class="container-fluidpaddingsmlr0">
        <div class="col-md-12 paddingsmlr0">
            <div class="col-md-12 margintop35 paddingsmlr0">
                <?php
                if (have_rows('for_gym')):
                    $count = 1;
                    while (have_rows('for_gym')) : the_row();
//                                            
                        ?>
                        <div class="faqsection panel panel-default">
                            <div class="panel-heading faqsection-heading">
                                <h4 class="panel-title">

                                    <i class="indicator glyphicon glyphicon-chevron-right">

                                    </i><a style="line-height:1.6" class=" faq-question-link accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#gymcollapse<?php echo $count; ?>">
                                        <?php the_sub_field('question'); ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="gymcollapse<?php echo $count++; ?>" class="panel-collapse collapse">
                                <div class="panel-body paddingtopbottom0" style="border-top:0px solid transparent">
                                    <p class="Yes-We-are-live-in"><?php the_sub_field('answer'); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
        </div>
    </div>
</div>