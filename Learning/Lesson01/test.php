<form method = "post" action ="<?php $_SERVER['PHP_SELF'] ?>">
<input type="submit" name = "delete" value="Delete" onclick="return deleletconfig()">
<a href="test.php?delete=OK" onclick="return deleletconfig()">Del</a>
</form>

<?php
if (isset($_GET['delete']))
echo "Hapus";
if (isset($_POST['delete'])){  //delete clicked
echo "Deleted";
}
?>
<script>
    function deleletconfig(){
    var del=confirm("Are you sure you want to delete this record?");
    if (del==true){
       alert ("record deleted")
    }else{
        alert("Record Not Deleted")
    }
    return del;
    }
</script>

