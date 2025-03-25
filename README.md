# Drumento: Magento + Drupal + Nginx Reverse Proxy + Docker

A full-stack local development environment using Docker, combining Magento 2, Drupal, and Nginx reverse proxy; so you can host Magento at a subdomain or any location via reverse proxy. 

Using [Docker-Magento](https://github.com/markshust/docker-magento).

## 🚀 Quick Start

1. Clone the repo
```bash
git clone git@github.com:yourname/drumento.git
cd drumento
```
2. Start up Magento Store
```bash
cd store
bin/start
```
3. Start up Drupal CMS
```bash
cd cms
docker compose up -d 
```
4. Start up Nginx proxy server
```bash
cd proxy
docker compose up -d 
```

## Project Info
Host Magento and Drupal on same domain. The Mark Shust Magento-Docker repository has lots of helpful commands for managing Magento. The key to serving Magento through a reverse proxy is creating an nginx override file, and attaching that to the Magento volume to fix too many redirect errors. markshust/docker-magento has lots of helper commands in bin/ folder, and can handle creating your ssl certificates for site.test and store.site.test. 

### Certificates
Add the rootCA.pem Magento creates to Trusted Root Certification Authorities

### Custom themes in cms/web/themes/custom

### Magento custom modules in store/src/app/code

### Use docker compose exec to bash into containers

### Use composer install in containers if needed