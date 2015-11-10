<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <?php  if($noMenu == 1){?>
            
            <!--            MENU KEPALA BDRS            -->
            <li >                
                <a href="<?php base_url()?>index.php/welcome/redirect/file">
                    <span class="glyphicon glyphicon-home"></span>
                    <span>Home</span>
                    <hr>
                </a>
            </li> 
            
              <li>                
                  <a href="<?php base_url()?>index.php/welcome/redirect/chart">
                    <span class="glyphicon glyphicon-signal"></span>
                    <span>Charts </span>
                    <hr>
                </a>
            </li> 
           
           
            <?php  }elseif($noMenu == 2){?>
            <!--            MENU PETUGAS LAB            -->
            
            <?php  }elseif($noMenu == 3){?>
            <!--            MENU PETUGAS ADMINISTRASI            -->
            
            <?php  }elseif($noMenu == 4){?>
             <!--            MENU PETUGAS ADMINISTRASI            -->
             
            <?php } ?>
    </ul>
    </div>





