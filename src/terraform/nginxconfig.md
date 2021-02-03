server {
        listen 80;
        server_name 201907-pia.smoothops.eu;
        return 301 https://$host$request_uri;
}

server {
        listen 443 ssl;
        server_name 201907-pia.smoothops.eu;
        ssl_certificate /etc/nginx/certs/smoothops.eu.crt;
        ssl_certificate_key /etc/nginx/certs/smoothops.eu.key;
        ssl_session_timeout 10m;
        ssl_session_cache shared:SSL:10m;
        ssl_protocols SSLv2 TLSv1.2;
}

server {
        listen       80 default_server;
        listen       [::]:80 default_server;
        server_name  MY_SERVER_NAME;
        root         /usr/share/nginx/html;

        # Load configuration files for the default server block.
        include /etc/nginx/default.d/*.conf;

        location / {
                proxy_set_header Host $host;
                proxy_set_header X-Real-IP $remote_addr;
                proxy_pass https://SOMETHING.execute-api.REGION.amazonaws.com/dev/RESOURCE/METHOD;               
                proxy_ssl_server_name on;
                proxy_ssl_protocols TLSv1 TLSv1.1 TLSv1.2;
                proxy_buffering off;
        }
}