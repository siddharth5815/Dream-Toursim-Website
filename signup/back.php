<!DOCTYPE html>
<htlm>
<head>
	 <head> 
        <script src= 
        "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
        </script> 
        <script> 
            $(document).ready(function(){ 
                $("button").click(function(){ 
                    $("#div_content").load("gfg.txt"); 
                }); 
            }); 
        </script> 
        <style> 
            body { 
                text-align: center; 
            } 
            .gfg { 
                font-size:40px; 
                font-weight: bold; 
                color: black; 
            } 
            .geeks { 
                font-size:17px; 
                color: black; 
            } 
            #div_content { 
                font-size: 40px; 
                font-weight: bold; 
                color: black; 
            } 
        </style> 
    </head> 
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
</body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand">Dream Tourism</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
<a href="logout.php" class="btn btn-primary">Logout</a>
    </ul>
</div>
</nav>


<body> 
        <div id="div_content"> 
            <div class = "text-center gfg">Hello <?php echo $_SESSION['username']; ?> </div> 
        </div>
    </body> 

    <div class="container">
    	<h5 class="text-center my-5">PLEASE SELECT YOUR PREFERRED PACKAGE/TOUR AND FILL THE FORM TO CONTINUE</h5>
    	<div class="row">
    		<div class="col-lg-6 offset-lg-3">
    			<form>
    				<div class="form-content">
    					<div class="input-group mb-3">
    						<div class="input-group-prepend">
    							<span class="input-group-text" id="basic-addon1">PACKAGE</span>
    						</div>
    						<select class="form-control" aria-describedby="basic-addon1" data-toggle="tooltip" title="Please Select Your Fav Pack" onchange="mypack(this.value)">
    							<option> Select Here </option>
    							<option>Air International Pack</option>
    							<option>Domestic Pack</option>
    							<option>Cruise Pack</option>
    						</select>
    					</div>
    					<div class="input-group mb-3">
    						<div class="input-group-prepend">
    							<span class="input-group-text" id="basic-addon2">TOUR</span>
    						</div>
    						<select class="form-control" id="frameworklist" aria-describedby="basic-addon1" >
    							<option> Select Here </option>
    						</select>
    					</div>
    				</div>
    			</form>
    		</div>
    	</div>
    </div>

 <!-- PHP form connects with mysql database using session -->
<section class="my-6">
  	<div class="py-7">
  	</div>

  	<div class="w-50 m-auto">
      <form action="database.php" method="post">
      	<div class="ban-bottom">
				<div class="bnr-right">
				<label class="inputLabel">From</label>
				<input class="date" name="from" id="datepicker" type="text" placeholder="dd-mm-yyyy"  name="fromdate" required="">
			</div>
			<div class="bnr-right">
				<label class="inputLabel">To</label>
				<input class="date" name="to" id="datepicker1" type="text" placeholder="dd-mm-yyyy" name="todate" required="">
			</div>
			</div>
  			<div class="form-group">
  				<label>Confirm Email:</label>
  				<input type="text" name="email" autocomplete="off" class="form-control">
  			</div>
  			<div class="form-group">
  				<label>Confirm Mobile:</label>
  				<input type="text" name="mobile" autocomplete="off" class="form-control">
  			</div>
        <div class="form-group">
          <label>No. of Persons:</label>
          <select class="form-control" name="persons" id="sel1">
            <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    </select>
        </div>
  			<div class="form-group">
  				<label>Comment(optional):</label>
  				<textarea class="form-control" name="comment"></textarea>
  			</div>
  		</form>
  	</div>
</section>

<div class="text-center py-3">
<a href="database.php" class="btn btn-success"> Continue </a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
function mypack(data){ 

 const ajaxreq = new XMLHttpRequest();
 ajaxreq.open('GET', 'http://localhost/Projectwebsite/signup/getdata.php?selectvalue='+data,'TRUE');
 ajaxreq.send();

 ajaxreq.onreadystatechange = function(){
 if (ajaxreq.readyState == 4 && ajaxreq.status == 200){
 document.getElementById('frameworklist').
 innerHTML = ajaxreq.responseText;
}
}
	
}
</script>

<script type="text/javascript"></script>

<footer>
  <p class="p-3 bg-dark text-white text-center">
  @dreamtourism</p>
</footer>
</body>
</htlm>