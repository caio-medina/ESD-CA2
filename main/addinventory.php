<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveinventory.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Product</h4></center>
<hr>
<div id="ac">
<span>Item Code  : </span><input type="text" style="width:265px; height:30px;" name="code" placeholder="Item Code " Required/><br>
<span>Item Name  : </span><input type="text" style="width:265px; height:30px;" name="name" placeholder="Item Name "/><br>
<span>Category : </span><input type="text" style="width:265px; height:30px;" name="category" placeholder="Category"/><br>
<span>Supplier  : </span><input type="text" style="width:265px; height:30px;" name="supplier" placeholder="Supplier"/><br>
<span>Date Received: </span><input type="date" style="width:265px; height:30px;" name="date_received" placeholder="Date Received"/><br>
<span>Expiry Date: </span><input type="date" style="width:265px; height:30px;" name="date_expiry" placeholder="Date Expiry"/><br> 
<span>Original Price: </span><input type="text" style="width:265px; height:30px;" name="original_price" placeholder="Price"/><br>
<span>Selling Price: </span><input type="text" style="width:265px; height:30px;" name="selling_price" placeholder="Price"/><br>
<span>Profit : </span><input type="text" style="width:265px; height:30px;" name="profit" placeholder="Price"/><br>
<span>QTY : </span><input type="text" style="width:265px; height:30px;" name="qty" placeholder="QTY"/><br>

<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
</div>
</div>
</form>