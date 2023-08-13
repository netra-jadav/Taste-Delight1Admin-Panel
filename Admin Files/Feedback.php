<?php
	include "header.php";
?>
	 <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">FeedBack Form</h4>
								<h5>
								<a href="alterfeedback.php" style="float:right">Add FeedBack</a>
								</h5>
                                <div class="table-responsive">
								<form action="alterscheme.php" method="POST">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        
                                            <tr>
                                                <th>feedback_id</th>
                                                <th>customer_name</th>
                                                <th>email_id</th>
												<th>subject</th>
												<th>description</th>
												<th>Action</th>
                                            </tr>
                                        
                                            <?php
												$cn=mysqli_connect("localhost","root","","ofdproject");
												$rs=mysqli_query($cn,"select * from contactpage");
												while($row=mysqli_fetch_array($rs))
												{
													echo "<tr>";
													echo "<td>".$row['ref_id']."<?td>";
													echo "<td>".$row['custmor_name']."<?td>";
													echo "<td>".$row['custmor_email']."<?td>";
													echo "<td>".$row['subject']."<?td>";
													echo "<td>".$row['message']."<?td>";
													
											?>
											
											<td>
												<i class="fa fa-edit"></i>&nbsp;
												<a href="EditFeedback.php?ref_id=<?php echo $row['ref_id'];?>">EDIT</a><br>
												<i class="fa fa-trash"></i>&nbsp; 
												<a href="DeleteFeedback.php?ref_id=<?php echo $row['ref_id'];?>">DELETE</a>
											</td>
												
												<?php 
												echo "</tr>";
												}
												
											?>
                                        
                                    </table>
									</form>
									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
	
<?php
	include "footer.php";
?>