<?php

include 'header.php';

?>

<div class="content">

    <div class="page-header">

        <ol class="breadcrumb">

            <li><a href="index.php">Dashboard</a></li>

            <li class="active">All Results</li>

        </ol>

    </div>

    <div class="container-padding container-widget">



        <div class="row">

            <div class="col-md-12">

                <div class="panel panel-default">

                    <div class="panel-title">

                        All Results

                    </div>

                    <div class="panel-body table-responsive">

                        <table id="example0" class="table display">

                            <thead>

                                <tr>

                                    <th>Sr.</th>

                                    <th>Student Info</th>

                                    <th>Centre Info</th>

                                    <th>Marks</th>

                                    <th>Remarks</th>
                                    <th>Action</th>

                                </tr>

                            </thead>

                            <tbody>

                                <?php

                                $result = mysqli_query($link, "select * from tbl_result order by id desc");

                                $i = 0;

                                while ($rowww = mysqli_fetch_array($result)) {

                                    $i++;

                                ?>

                                    <tr>

                                        <td><?= $i; ?></td>

                                        <td>

                                            <?php

                                            $ssttuu_id = $rowww['student_id'];

                                            $stusel = mysqli_query($link, "SELECT * FROM tbl_student WHERE id='$ssttuu_id'");

                                            $row = mysqli_fetch_array($stusel);

                                            echo "Reg: " . $row['REGISTRATION'] . "<br>";

                                            echo "Name: " . $row['Name'] . "<br>";

                                            echo "Fa/HU. Name: " . $row['FaHuName'] . "<br>";

                                            echo "MO. Name: " . $row['MotherName'] . "<br>";

                                            echo "DOB: " . $row['DOB'] . "<br>";

                                            echo "Result Year: " . $rowww['result_year'];

                                            ?>

                                        </td>

                                        <td>

                                            <?php

                                            $instu_id = $row['instu_id'];

                                            $instusel = mysqli_query($link, "SELECT * FROM tbl_instute WHERE id='$instu_id'");

                                            $instu_data = mysqli_fetch_array($instusel);

                                            echo "Refno.: " . $instu_data['RefrenceNo'] . "<br>";

                                            echo "Name: " . $instu_data['CentreName'] . "<br>";

                                            echo "State: " . $instu_data['CentreState'] . "<br>";

                                            echo "Address: " . $instu_data['CentreAddress'];

                                            ?>

                                        </td>

                                        <td>

                                            <?php

                                            echo "Total Marks: " . $rowww['total_marks'] . "<br>";

                                            echo "Get Marks: " . $rowww['get_marks'];

                                            ?>

                                        </td>

                                        <td>
                                            <?php
                                            echo "Remark: " . $rowww['remark'];
                                            ?>
                                        </td>
                                        <td>
                                            <a href="view_result.php?id=<?= $rowww['id']; ?>" class="btn btn-success btn-sm">View Result</a>
                                            <a href="update_results.php?id=<?= $rowww['id']; ?>" class="btn btn-warning btn-sm">Update Result</a>
                                            <a href="show_admit_card.php?id=<?= $rowww['id']; ?>" class="btn btn-primary btn-sm">Make admit card</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>

                        </table>

                    </div>

                </div>

            </div>



            <!-- End Panel -->

        </div>

    </div>

    <?php

    include 'footer.php';

    ?>

    <script src="js/datatables/datatables.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#example0').DataTable();

            $('#example1').DataTable();

        });
    </script>