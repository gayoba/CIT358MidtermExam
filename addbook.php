
<html>

<head>
	<title>Book Information</title>
    <link href="assets/css/reg.css" rel="stylesheet">
</head>

<body>
	<form action="booksave.php" method="post">
	<h1>Library Database</h1>
	<fieldset>
		<legend>Book Information</legend>
		<label>Title:</label> <input type="text" name="title" required/><br />
		<label>Pages:</label> <input type="number" min=1 name="pages" required/><br />
		<label>Author:</label> <input type="text" name="author" required/><br />
		<label>Published Year:</label> <input type="text" name="year" required/>
        <div><br/></div>
    <input style="float:right" type="submit" value="submit" name="submit"/>
    </fieldset>
    <h3>List of Stored Books</h3>
    <table border="2" align="center" cellpadding=5>
            <thead>
                <tr><th>Title</th>
                    <th>Pages</th>
                    <th>Author</th>
                    <th>Published Year</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              <?php 
                        include "include/dbconnect.php";
                        $pat = $connect->query("SELECT * FROM `booklibrary`") or die(mysqli_error());


                        while($book = $tit->fetch_array()){
                            ?>

                            <tr>
                                <td><?php echo $book['title'] ." ". $book['patient_lastName']?></td>
                                <td><?php echo $book['pages'] ?></td>
                                <td><?php echo $book['author'] ?></td>
                                <td><?php echo $book['year'] ?></td>
                               
                                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookEdit-<?php echo $book['id']?>">Edit</button>
                                    <!-- Patient Edit Modal -->
                                    <div class="modal fade" id="bookEdit-<?php echo $book['id']?>" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title pull-left">Modify Book Information</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">

                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label>Title</label>
                                                                <input type="text" name="title1" value ="<?php echo $book['title']?>" class="form-control form-control-lg">
                                                                <i class="form-group__bar"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label>Pages</label>
                                                                <input type="number"  name="pages1" value ="<?php echo $book['pages']?>"  class="form-control form-control-lg">
                                                                <i class="form-group__bar"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Author</label>
                                                                <input type="text" name="author1" value ="<?php echo $book['author']?>" class="form-control form-control-lg">
                                                                <i class="form-group__bar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Year</label>
                                                                <input type="number" name="year1" value ="<?php echo $book['year']?>" class="form-control " >
                                                                <i class="form-group__bar"></i>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" name="id1" value="<?php echo $book['id'] ?> " /> 
                                                    <button type="submit" name="pedit" class="btn btn-link">Save changes</button>
                                                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </td>
                                ?>
            </tbody>
        </table>
	</form>
    <script type="text/javascript" src="assets/js/jquery-1.10.2.js"></script>
	<script type="text/javascript">
		function submit_form(){
			alert("A new book has been successfully added!");
		}
	</script>

</body>
</html>