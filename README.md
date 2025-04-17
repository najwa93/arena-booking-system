# Sports Arena Booking API - Laravel 11

This project is a simple API built with Laravel 11 to manage sports arenas and booking systems.

## Project Overview

This Laravel-based API project provides a booking system for sports arenas.

- There are two user roles: **Owner** and **Customer**.
- An **Owner** can create new arenas via the `/arena/create` endpoint.
- A **Customer** can:
  - Create a booking for a time slot via the `/booking/create` endpoint.
  - Confirm a pending booking via the `/booking/confirm/{bookingId}` endpoint.
- If a booking is not confirmed within 10 minutes, it will be deleted automatically.
- This cleanup is handled using Laravel's **scheduler**.
- 
## Features

- Arena creation by owners
- Time slot booking by customers
- Booking confirmation
- User roles (Owner, Customer)
- Unit and Feature testing
- Laravel Scheduler and Queue support
- Seeded data for quick testing

## Tech Stack

- PHP 8.2
- Laravel 11
- MySQL
- Postman (for API testing)

## Installation

1. **Clone the Repository:**

```bash
git clone https://github.com/your-username/sports-arena-booking.git
cd sports-arena-booking

2. Install Dependencies:

composer install

3. Set Environment Variables:

cp .env.example .env
php artisan key:generate

4. Run Migrations and Seeders:

php artisan migrate:fresh --seed
This will create:

2 users:

id = 1 => Owner

id = 2 => Customer

5. Run the server:

php artisan serve

6.Run Scheduler:

php artisan schedule:work

## Running Test

php artisan test

## Api Endpoints

| Role     | Action                     | Endpoint               |
|----------|----------------------------|------------------------|
| Owner    | Create Arena               | POST /arena/create     |
| Customer | Create Booking             | POST /booking/create   |
| Customer | Confirm Booking            | POST /booking/confirm/{bookingId} |

##A Postman collection is included to test the endpoints easily.
You can find the Postman collection in the `/postman` folder:
Import the file Sports-Arena-Time-Slot-Management.postman_collection.json into Postman.

## Directory Structure
app/Domain - Follows Domain-Driven Design (DDD) principles

tests/Unit - Unit tests

tests/Feature - Feature tests
