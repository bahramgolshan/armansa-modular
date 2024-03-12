<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Armansa

Armansa has started its activity since 1373 in the field of printing, newspaper and lithography industry. Now with having expert and professional forces in the field of book printing as well as up-to-date and modern machines; He has the honor of working with many great and valuable publishers and authors in his career. Despite having 30 years of experience, Ermansa Institute guarantees to provide the best quality to dear authors for their valuable works.

## Figma Design

Please visit the following link for the latest UI changes: [Armansa Figma Design](https://www.figma.com/file/fhkOy1SF19AYEL1sINcZ5u/Armansa-Website?type=design&t=664ifn3C6lzIrc76-6)

## Installation

1. Clone the project using:

```bash
git clone https://github.com/bahramgolshan/armansa.git
```

2. Navigate to project's directory like:

```bash
cd armansa
```

3. Create .env file:

```bash
cp laravel-app/.env-example laravel-app/.env
```

4. Disable docker scan:

```bash
export DOCKER_SCAN_SUGGEST=false
```

5. Create armansa network:

```bash
docker network create armansa
```

6. Build image:

```bash
docker compose build
```

7. Run the project:

```bash
docker compose up -d
```

8. Update & create Vendor:

```bash
docker exec armansa-app-1 bash -c 'composer update; composer install'
```

9. Visit the project: (http://localhost:8085/)
