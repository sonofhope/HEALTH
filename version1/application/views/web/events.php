<section id="doctors">
    <div class="container">
            <div>
                <h3><?php echo $title;?></h3><br>
                <p>Get assisted by our Authorized and professional Doctors </p><br>
                <small>View their profile</small>

            </div>

            <div class="row">
                <div class="col-md-12">
                    
                        <?php foreach($events as $event){?>
                            <div class="col-md-6">
                                <div class="thumbnail">
                                    <a href="<?=base_url();?>assets/img/dummy/img-1.png"><img src="<?=base_url();?>assets/img/dummy/img-1.png" alt=""></a>
                                    <div class="caption">
                                        Caption Title:<?php echo $event['title'];?><br>
                                        Description:<?php echo $event['description'];?><br>
                                        Posted at:<?php echo $event['date'];?><br>
                                        Posted by: <?php echo $event['name'];?><br>
                                    </div>
                                    
                                </div>
                                
                                
                            </div>
                        <?php }?>
                    <nav>
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                                <li class="page-item active"><a href="#" class="page-link"><span class="page-link">1 <span class="sr-only">(current)</span></span></a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a class="page-link">Next</a></li>
                            </ul>
                    </nav>
                </div>
            </div>
    </div>
   
</section>