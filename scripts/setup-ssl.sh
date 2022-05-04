#!/usr/bin/env bash

echo "Setting Up SSL"

if [ $# -eq 0 ]
  then
    read -p "Enter domain Name: " domain
else
  domain=$1
fi

echo "Ssl in process"

certbot certonly -n --standalone --register-unsafely-without-email --agree-tos --domain "${domain}"
# certbot certificates

if [ $? -ne 0 ]
then
  echo "SSl failed for domain $domain"
  exit 1
fi
DefaultSSLDir="/etc/letsencrypt/live/$domain"
echo "Defaults SSl Dir is $domain"

if [ ! -d "$DefaultSSLDir" ]; then
  echo "Cannot Find Default .tSSL Directory $DefaultSSLDir"
  exit 1
fi

certFile="$DefaultSSLDir/cert.pem"

privkeyFile="$DefaultSSLDir/privkey.pem"

printf '{"domain":"%s","cert":"%s","privkey":"%s"}\n' "$domain" "$certFile" "$privkeyFile" > ./auto/ssl.json

exit 0