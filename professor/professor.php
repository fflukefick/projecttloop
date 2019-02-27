<?php
require_once "professorHeader.php";
?>
    <div class="container-fluid">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title" style="text-align:center">SUBJECT</h4>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- ADD professor -->
                        <p><form action="addprofessor/addprofessor.php" method="Post">
                         <input type="submit" value = "ADD PROFESSOR">
                        </form></p>
                        <!-- ADD professor -->
                        <!-- EDIT SUBJECT -->
                        <p><form action="createsubject/createsubject.php" method="Post">
                        <input type="submit" value = "CREATE SUBJECT">
                         </form></p>
                         <!-- EDIT SUBJECT -->
                         <!-- ADD STUDENT -->
                         <p style="border-style: dotted;">
                            <form id = "uploadid"action="addstudent/addstudent.php" method="post">
                            <input type="file" name="filename" accept=".csv" /><br>
                            <input type='submit' value='IMPORT'>
                            </form>
                        </p ><p style="border-style: dotted;"></p>
                        <!-- ADD STUDENT -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>

<?php
include "professorFooter.php";
?>