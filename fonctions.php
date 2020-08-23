<?php

//Permet de mettre les données d'un tableau associatifs dans des cartes Bootstrap
function EXIF_to_card ($exif){
    ?>
    <div class="row">
        <div class="offset-2  col-8">
            <div class="row">
                <?php
                foreach($exif as $key => $value){
                    ?>
                    <div class="col-6">
                        <div class="card border-dark mb-3" id="<?php echo $key ?>">
                            <div class="card-header"><?php echo $key ?></div>
                            <div class="card-body text-dark">
                                <?php
                                // Si la donné est un tableau, on affiche un tableau dans le corps de la carte
                                if (is_array($value)){
                                    ?>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <?php
                                            foreach($value as $key2 => $value2){
                                                ?>
                                                <tr>
                                                <th scope="row"><?php echo $key2; ?></th>
                                                <td><?php echo $value2; ?></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>          
                                        </tbody>
                                    </table>
                                    <?php
                                }else{
                                    ?>
                                    <h5 class="card-title"><?php echo $value; ?></h5>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php   
}
?>