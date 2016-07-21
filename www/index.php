<html>
<head>
	<meta charset="utf-8">
	<title>Форма</title>
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>
	<form class="form" method="post" action="ansible.php">
		<h1>Настройка Ansible</h1>
		<p class="text">Пожалуйста, заполните все поля</p>
		<h2>Linux</h2>
			<p class="node01">
				<input type="text" name="node01" id="node01" placeholder="node01" required/>
				<label for="node01">Адрес первого сервера</label>
			</p>
			<p class="node02">
				<input type="text" name="node01" id="node01" placeholder="node02" required/>
				<label for="node02">Адрес второго сервера</label>
			</p>
			<p class="additional_packages">
				<input type="text" name="additional_packages" id="additional_packages" placeholder="yes/no" required/>
				<label for="additional_packages">Установить htop, mc, ntp?</label>
			</p>
		<h2>MySQL</h2>
			<p class="mysql_root_password">
				<input type="password" name="mysql_root_password" id="mysql_root_password" placeholder="2YbCeNr9QrC4lpdD77VI" required/>
				<label for="mysql_root_password">Пароль root пользователя</label>
			</p>
			<p class="mysql_wordpress_user">
				<input type="text" name="mysql_wordpress_user" id="mysql_wordpress_user" placeholder="wpuser" required />
				<label for="mysql_wordpress_user">Имя wordpress пользователя</label>
			</p>
			<p class="mysql_wordpress_password">
				<input type="password" name="mysql_wordpress_password" id="mysql_wordpress_password" placeholder="Us3hIN1pulxLaSBgW0VI" required />
				<label for="mysql_wordpress_password">Пароль wordpress пользователя</label>
			</p>
			<p class="mysql_wordpress_database">
				<input type="text" name="mysql_wordpress_database" id="mysql_wordpress_database" placeholder="wpbase" required />
				<label for="mysql_wordpress_database">База данных wordpress</label>
			</p>
			<p class="mysql_wordpress_host">
				<input type="text" name="mysql_wordpress_host" id="mysql_wordpress_host" placeholder="localhost" required />
				<label for="mysql_wordpress_host">Сервер wordpress</label>
			</p>
		<h2>Pacemaker</h2>
			<p class="ip">
				<input type="text" name="ip" id="ip" placeholder="192.168.100.100" pattern="\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}" required />
				<label for="ip">Кластерный ip</label>
			</p>
			<p class="ip_netmask">
				<input type="text" name="ip_netmask" id="ip_netmask" placeholder="32" pattern="[0-9]{2}" required />
				<label for="ip_netmask">Маска подсети кластерного ip</label>
			</p>
			<p class="ip_int">
				<input type="text" name="ip_int" id="ip_int" placeholder="30" pattern="[0-9]{1,4}" required />
				<label for="ip_int">Интервал проверки доступности кластерного ip</label>
			</p>
			<p class="nginx_int">
				<input type="text" name="nginx_int" id="nginx_int" placeholder="30" pattern="[0-9]{1,4}" required />
				<label for="nginx_int">Интервал проверки доступности nginx</label>
			</p>
			<p class="fpm_int">
				<input type="text" name="fpm_int" id="fpm_int" placeholder="30" pattern="[0-9]{1,4}" required />
				<label for="fpm_int">Интервал проверки доступности php-fpm</label>
			</p>	
			<p class="buttons">		
				<input type="reset" value="Очистить форму">
				<input type="submit" value="Начать установку">
			</p>
	</form>
</body>
</html>