<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Fuse Installation</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<link href="../resource/css/app.v2.css" rel="stylesheet">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="../assets/js/html5shiv.js"></script>
		<![endif]-->

	</head>

	<body>

		<div class="container">

			<div class="row">

				<p>To install Freelancer Office, simply provide the following information</p>

				<?php
				//$password =
				// '08gv6gemSKxv09EImCsPLO94Nje6ZVAlFnuc13kohFwvC0kh/ESFEn1lEwL9bbSbrlym/UrO6wM9p0CGnjJHzg==';
				// == admin

				$domain = $_SERVER["HTTP_HOST"];
				$self = $_SERVER["PHP_SELF"];
				$path = $domain . $self;
				$url = 'http://' . substr($path, 0, -18);

				if (!is_writable('../application/config/database.php'))
				{
					echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button> <i class="fa fa-times"></i> application/config/database.php file is not writable. Please chomod 777 before to continue</div>';
					die();
				}
				if (!is_writable('../application/config/config.php'))
				{
					
					echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button> <i class="fa fa-times"></i> application/config/config.php file is not writable. Please chomod 777 before to continue</div>';
					die();
				}

				if ($_POST)
				{

					$host = $_POST['host'];
					$username = $_POST['username'];
					$password = $_POST['password'];
					$url = $_POST['url'];
					$database = $_POST['database'];
					$email = $_POST['email'];

					if (!$host OR !$username OR !$password OR !$url OR !$database)
					{
						echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button> <i class="fa fa-warning"></i> Please enter all the fields</div>';
					}
					else
					{
						$link = @mysql_connect($host, $username, $password);

						if (!$link)
						{
							echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button> <i class="fa fa-unlink"></i> Connection to MySQL failed. Please enter correct MySQL data</div>';
						}
						else
						{
							mysql_select_db($database);

							if (!is_file('freelancer.sql'))
							{
								echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button> <i class="fa fa-file"></i> SQL file not found</div>';
							}
							else
							{
								$templine = '';
								// Read in entire file
								$lines = file('freelancer.sql');
								foreach ($lines as $line)
								{
									if (substr($line, 0, 2) == '--' || $line == '')
										continue;
									$templine .= $line;
									if (substr(trim($line), -1, 1) == ';')
									{
										mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
										$templine = '';
									}

								}
							}

							mysql_query("UPDATE fx_config SET value = '$email' WHERE key='company_email' ");
							$db_file = file_get_contents('database.php');
							$db_file = str_replace('%hostname%', $host, $db_file);
							$db_file = str_replace('%username%', $username, $db_file);
							$db_file = str_replace('%password%', $password, $db_file);
							$db_file = str_replace('%database%', $database, $db_file);
							file_put_contents('../application/config/database.php', $db_file);

							$db_file = file_get_contents('config.php');
							$db_file = str_replace('%url%', $url, $db_file);
							file_put_contents('../application/config/config.php', $db_file);
							echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button> <i class="fa fa-check-circle"></i> Freelancer Office has been installed successfully. You may access the administration control panel at <a target="_blank" href="' . $url . '/">' . $url . '/</a> using the admin email/username and password <b>admin</b>';
							die();

						}
					}
				}
				?>


<div class="col-sm-10"> <section class="panel panel-default">
<header class="panel-heading font-bold">Installation form</header>
<div class="panel-body">
	<form action="index.php" method="post" class="bs-example form-horizontal">
		<div class="form-group">
			<label class="col-lg-2 control-label">Script URL</label>
			<div class="col-lg-10">
				<input class="form-control" value="<?php echo $url; ?>" type="text"  name="url" required="required">
				<span class="help-block m-b-none">The Base URL of the System
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label">MYSQL Host</label>
			<div class="col-lg-10">
				<input class="form-control" name="host" value="localhost" required="required" >
				<span class="help-block m-b-none">Your MYSQL Host
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label">MYSQL Database
			</label>
			<div class="col-lg-10">
				<input class="form-control" type="text" name="database" value="" required="required" >
				<span class="help-block m-b-none">MYSQL Database Name
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label">MYSQL Username
			</label>
			<div class="col-lg-10">
				<input class="form-control" type="text" name="username" value="" required="required" >
				<span class="help-block m-b-none">MYSQL Username
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label">MYSQL Password
			</label>
			<div class="col-lg-10">
				<input class="form-control" type="text" name="password" value="" required="required"  >
				<span class="help-block m-b-none">MYSQL Login Password
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label">Company Email
			</label>
			<div class="col-lg-10">
				<input class="form-control" type="email" name="email" value="" required="required"  >
				<span class="help-block m-b-none">Your Official Company Email
				</span>
			</div>
		</div>





		<div class="form-group">
			<div class="col-lg-offset-2 col-lg-10">
			<button type="submit" class="btn btn-sm btn-success" name="submit">Install System</button>
			</div>
		</div>
	</form>
</div> </section>
</div>

				</div>

				<hr>
			</div>
			<!-- /container -->

	</body>
</html>
