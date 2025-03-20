# Acme Sales System
- Acme Widget Co are the leading provider of made up widgets and this is a proof of concept for their new sales system.
- The system calculates the total cost of a basket of products, taking into account delivery charges and special offers.
## **Table of contents**
1. [Prerequisites](#prerequisites)
2. [Setup](#setup)
3. [Running the Application](#running-the-application)
4. [Running Tests](#running-tests)
5. [Static Analysis with PHPStan](#static-analysis-with-phpstan)
6. [Running with Docker](#running-with-docker)
7. [Assumptions](#assumptions)
8. [Useful Links](#useful-links)


## **Prerequisites** <a name="prerequisites"></a>
Before you begin, ensure you have the following installed:
- **PHP 8.2.28**
- **Composer** (for dependency management)
- **Docker** (optional, for containerized development)
- **Docker Compose** (optional, for containerized development)

## **Setup** <a name="setup"></a>
### Clone the repository
```shell
git clone https://github.com/vansomeren/acme-sale-system.git
cd acme-sale-system
```

### Install Dependencies
- Use Composer to install the required dependencies:

```shell
composer install
```
### Running the Application <a name="running-the-application"></a>
- To run the application locally, use the following command:
```shell
php -a
 ```
- You can interact with the Basket class directly in the PHP interactive shell.
### Running Tests <a name="running-tests"></a>
- The project includes unit and integration tests written with PHPUnit.
1. #### Run all tests
```shell
composer test
```
2. #### Run unit tests
```shell
vendor/bin/phpunit tests/Unit
```
3. #### Run integration tests
```shell
vendor/bin/phpunit tests/Integration
```
### Static Analysis with PHPStan <a name="static-analysis-with-phpstan"></a>
- PHPStan is used for static code analysis to ensure code quality.
1. #### Run PHPStan
```shell
composer analyse
```
### Running with Docker <a name="running-with-docker"></a>
-The project includes a **`Dockerfile`** and **`docker-compose.yml`** for containerized development.
1. #### Build the Docker Image
```shell
docker-compose build
```
2. #### Run the application
 - Start the PHP application container:
```shell
docker-compose up app
```
3. ### Run tests in Docker
- Execute PHPUnit tests in the **`phpunit`** service:
```shell
docker-compose run --rm phpunit
```
4. ### Run PHPStan in Docker
- Execute PHPStan for static analysis in the **`phpstan`** service:
```shell
docker-compose run --rm phpstan
```
5. ### Stop all containers
- Stop all running containers:
```shell
docker-compose down
```
### Assumptions <a name="assumptions"></a>
**1. Product Catalogue:**
- The product catalogue is static and provided at initialization.

**2. Special Offers:**
- Only one special offer is applied at a time.

**3. Delivery Charges:**
- Delivery charge rules are fixed and do not change dynamically.

### Useful Links <a name="useful-links"></a>
- **PHPStorm:** A powerful IDE for PHP development.

- **PHPUnit Documentation:** Official PHPUnit documentation.

- **PHPStan Documentation:** Official PHPStan documentation.

- **Docker Documentation:** Official Docker documentation.

- **Composer Documentation:** Official Composer documentation.