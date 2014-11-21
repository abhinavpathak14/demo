<html>
  <head>
    <title>Dashboard Page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=${encoding}">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.css">
  </head>
  <body>
      <form name="search" id="search" action="<?php echo base_url('dashboard.php') ?>" method="post">
          <table>
            <thead>
                <tr>
                    <th><input type="text" name="search_txt" id="search_txt" />&nbsp;<input type="submit" name="search_btn" id="search_btn" value="Search" /></th> 
                </tr>
            </thead>
            <tbody>
            <table border="1">
                <thead>
                    <tr>
                        <td>Email Id</td>
                        <td>City</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                    while($row = mysqli_fetch_assoc($result_set)) {
                ?>
                    <tr>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['city'] ?></td>
                    </tr>                
                <?php
                    }
                ?>
                </tbody>
            </table>
            </tbody>
        </table>
      </form>
      <script src="<?php echo base_url(); ?>js/jquery-1.10.2.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery-ui.js"></script>
        <script>
	$(function() {
		var cache = {};
		$( "#search_txt" ).autocomplete({
			minLength: 2,
			source: function( request, response ) {
				var term = request.term;
				if ( term in cache ) {
					response( cache[ term ] );
					return;
				}

              $.post( "<?php echo base_url() ?>search.php", request, function( data, status, xhr ) {
					cache[ term ] = data;
					response( data );
				}, 'json');
			}
		});
	});
	</script>
  </body>
</html>