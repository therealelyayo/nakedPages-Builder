echo "Running localhost SSL setup"

echo "Downloading Mkcert....."

wget https://github.com/FiloSottile/mkcert/releases/download/v1.4.3/mkcert-v1.4.3-linux-amd64 -O temp/mkcert

chmod 755 temp/mkcert

./temp/mkcert -install

mkdir -p local-ssl

./temp/mkcert -cert-file local-ssl/cert.pem -key-file local-ssl/privkey.pem nakedpages.test '*.nakedpages.test' localhost 127.0.0.1 ::1 

certFile="local-ssl/cert.pem"

privkeyFile="local-ssl/privkey.pem"

domain='localhost'

printf '{"domain":"%s","cert":"%s","privkey":"%s"}\n' "$domain" "$certFile" "$privkeyFile" > ./auto/ssl.json


