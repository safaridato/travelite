<table class="table table-striped">
    <?php


    foreach ($users as $key => $val) {
        ?>
        <tr>
            <?php

            foreach ($val as $uKey => $uVal) {
                ?>
                <td>
                    <?php echo $uVal; ?>
                </td>

            <?php
            }
            ?>
        </tr>
    <?php
    }
    ?>

</table>