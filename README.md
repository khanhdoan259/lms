
# How to set up developing environment

--------------

## 1. Create .env file for Docker

<code>cp .env.docker .env</code>

## 2. Build app by docker-compose

<code>docker-compose up -d</code>

## 3. Execute run container app

<code>docker exec -it ebook_api bash</code>

## 4. Install Package

- **<p>4.1. Composer</p>**
<code>composer install</code>
<br/>
<br/>
- **<p>4.2. Node module</p>**
<code>npm install</code> <br/>
<code>npm run dev (for development)</code>

## 5. Access app

<code>App: http://localhost:8000</code>

<code>Telescope: http://localhost:8000/telescope</code>

<code>Log viewer: http://localhost:8000/log-viewer</code>

<code>Adminer: http://localhost:28310 (host: ebook_db; user: root; pass: root)</code>

## 6. Install Xdebug
- Open file **docker/env.dev.yml** to edit <code>remote_host=<my_ip_address></code>
- Open file **docker/php.ini** to edit <code>xdebug.client_host=<my_ip_address></code>

## 7. Reference
AdminLTE 4.0: https://github.com/ColorlibHQ/AdminLTE/releases/tag/v4.0.0-beta1
Repository: https://github.com/andersao/l5-repository
Telescope: https://laravel.com/docs/11.x/telescope
Log viewer: (https://github.com/opcodesio/log-viewer)
Bootstrap icon: https://icons.getbootstrap.com