<div id="trainers">
    <div class="container-fluidpaddingsmlr0 margintop35">
       
                <?php
                if (have_rows('for_trainers')):
                    $traincount = 1;
                    while (have_rows('for_trainers')) : the_row();
//                                            
                        ?>
                        <div class="faqsection panel panel-default">
                            <div class="panel-heading faqsection-heading">
                                <h4 class="panel-title">

                                    <i class="indicator glyphicon glyphicon-chevron-right">

                                    </i><a style="line-height:1.6" class=" faq-question-link accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#trainerscollapse<?php echo $traincount; ?>">
                                        <?php the_sub_field('question'); ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="trainerscollapse<?php echo $traincount++; ?>" class="panel-collapse collapse">
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
    