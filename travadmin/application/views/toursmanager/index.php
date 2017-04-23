<div class="row-fluid">
    <h3 class="header smaller lighter blue">Take off to Georgia Tours List </h3>

    <div class="table-header">
        Result for "Tours List"
        <a href="<?php echo base_url() . "toursmanager/add/"; ?>" class="btn btn-small pull-right">Add Tour</a>
    </div>

    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
        <thead>

        <tr>
            <th>ID</th>
            <th>Tour Name</th>
            <th>Price</th>
            <th class="hidden-480">Days</th>
            <th class="hidden-phone">
                <i class="icon-time bigger-110 hidden-phone"></i>
                Created
            </th>
            <th class="hidden-phone">
                <i class="icon-time bigger-110 hidden-phone"></i>
                Status
            </th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        <?php
        foreach ($tours as $key => $val) {
            ?>
            <tr>
                <td><?php echo $val['Id']; ?></td>
                <td><?php echo $val['TourName']; ?></td>
                <th><?php echo $val['Price']; ?></th>
                <th class="hidden-480"><?php echo $val['DaysCount']; ?></th>
                <th class="hidden-phone">
                    <i class="icon-time bigger-110 hidden-phone"></i>
                    <?php echo $val['CreateDate']; ?>
                </th>
                <th class="hidden-phone">
                    <i class="icon-time bigger-110 hidden-phone"></i>
                    <?php echo $val['Status']; ?>
                </th>
                <th>
                    <a href="/travadmin/toursmanager/edit/<?php echo $val['Id']; ?>">Edit</a>
                    <a href="#" data-tour="<?php echo $val['Id']; ?>" class="delete-tour">Delete</a>

                    <?php

                    if ($val['Status'] == 2) {
                        ?>
                        <a href="#" data-tour="<?php echo $val['Id']; ?>" class="enable-tour">Enable</a>
                        <?php
                    } else {
                        ?>
                        <a href="#" data-tour="<?php echo $val['Id']; ?>" class="stop-tour">Stop</a>

                        <?php
                    }


                    ?>
                </th>
            </tr>
            <?php
        }
        ?>

        </tbody>
    </table>
</div>


<script>

    $(document).ready(function () {

        $(".delete-tour").click(function () {

            var tourId = $(this).attr("data-tour");

            if (confirm("Delete this tour: " + tourId + "?")) {

                ChangeStatusTour(tourId, 0)

            }

        });
        $(".stop-tour").click(function () {

            var tourId = $(this).attr("data-tour");

            if (confirm("Stop this tour: " + tourId + "?")) {

                ChangeStatusTour(tourId, 2)

            }

        });
        $(".enable-tour").click(function () {

            var tourId = $(this).attr("data-tour");

            if (confirm("Enable this tour: " + tourId + "?")) {

                ChangeStatusTour(tourId, 1)

            }

        });


        function ChangeStatusTour(tourId, status) {

            $.ajax({
                url: "<?php echo base_url();?>services/tourssvc/ChangeTourStatus",
                data: {tourId: tourId, status: status},
                dataType: "json",
                type: "post"
            }).success(function (res) {

                document.location.reload();
            });

        }

    });

</script>