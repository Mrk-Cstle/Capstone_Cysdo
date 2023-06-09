<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/addStaff.css">
    <title>Document</title>
</head>

<body>
<div class="backRound">
  <nav class="navbar navbar-light bg-light d-flex">
    <form class="form-inline m-lg-3">
      <input class="searchBar form-control-lg mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btnSearch btn btn-outline-success" type="submit">Search</button>
      <a class="btnAddStaff btn btn-outline-primary" href="#btnAdd">Add Staff</a>
    </form>
  </nav>
  <div class="table-responsive"> 
    <table class="table table-hover">
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Full Name</th>
        <th scope="col">Position</th>
        <th scope="col">Contact #</th>
        <th scope="col">Address</th>
        <th scope="col">E-mail</th>
        <th scope="col">Action</th>
    </tr>
   
    <tr>
    
    </tr>
    </table>
  </div>
  <div class="overlay" id="btnAdd">
		<div class="wrapper">
			<h2>Please Fill up The Form</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
					<form>
            <label class="d-flex" for="my_image">Insert 2x2 Pic: </label>
            <input class="insPic d-flex" type="file" name="my_image">
						<label class="d-flex">Full Name</label>
						<input class="d-flex" placeholder="Enter Full Name" type="text">
            <label class="d-flex">Position</label>
						<input class="d-flex" placeholder="Enter Position" type="text">
            <label class="entCont d-flex">Contact #</label>
						<input class="entContact d-flex" placeholder="Enter Contact no." type="number">
						<label class="d-flex">Address</label> 
						<textarea class="d-flex" placeholder="Enter Address"></textarea>
            <label class="d-flex">E-mail</label>
						<input class="d-flex" placeholder="Enter E-mail" type="text">
						<input class="btn btn-success" type="submit" value="Submit">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>