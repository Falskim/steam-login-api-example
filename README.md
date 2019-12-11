# STEAM-LOGIN-API-EXAMPLE
A simple page implementation of Steam OpenID API

## How to Use
1. Clone or [download (.zip)](https://github.com/Falskim/steam-login-api-example/archive/master.zip) this repository

```Shell
git clone https://github.com/Falskim/steam-login-api-example.git
```

2. Change ```SteamConfig.php``` API key with your key ([Get the keys](https://steamcommunity.com/dev/apikey)]
  ```php
  $steamauth['apikey'] = "YOUR API KEY"; 
  ```
3. Start the web server
   By using Built-in php web server
   
```Shell
cd steam-login-api-example
php -S 127.0.0.1:8000
```

4. Access the website using your favorite browser

    http://127.0.0.1:8000

## Library Used
[SteamAuthentication](https://github.com/SmItH197/SteamAuthentication)
