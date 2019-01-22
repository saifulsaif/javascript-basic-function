
<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Event  </h2>

   <?php
   class Emp {
      public $name = "";
      public $hobbies  = "";
      public $birthdate = "";
   }
	
   $e = new Emp();
   $e->name = "sachin";
   $e->hobbies  = "sports";
   $e->birthdate = date('m/d/Y h:i:s a', "8/5/1974 12:20:03 p");
   $e->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));

   $en= json_encode($e);
   echo $en."<br/>";
   var_dump(json_decode($en));
   var_dump(json_decode($en, true));
?>

</script>

</body>
</html>

