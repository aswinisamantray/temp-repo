## Usage : 
- Install XAMPP on your PC
- Navigate to `http://127.0.0.1:8080/`

## Docker based development environment:
- Install docker and run
```
# Make sure that you're in NSS-IITBh/ directory
docker run -d --name nss-php -p 8080:80 -v ${PWD}:/var/www/html/ -e BASE_URL='http://localhost:8080' php:apache
```

# Deployment
```
USERNAME=nss
SERVER=nss.iitbhilai.ac.in
SERVER_PATH=/srv/nss.iitbhilai.ac.in/pub/

cd .. && zip -r NSS.zip NSS-IITBh -x NSS-IITBh/.git/**/** && cd NSS-IITBh
scp NSS.zip ${USERNAME}@${SERVER}:${SERVER_PATH}
```