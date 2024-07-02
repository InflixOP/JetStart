# JetStart

## Overview
This platform connects startups with high-skilled freelancers. Freelancers can find new job opportunities in various startups, while startups can hire freelancers with the expertise they need. Additionally, the platform provides access to great ambassadors in different fields such as fintech, edtech, healthtech, etc.

## Features
- **Freelancer Job Search:** Freelancers can browse and apply for jobs in startups.
- **Startup Hiring:** Startups can post job openings and hire freelancers.
- **Ambassadors:** Access to ambassadors from various fields for guidance and networking.

## Technologies Used
- **Backend:** PHP
- **Frontend:** HTML, CSS

## Installation

### Prerequisites
- Web server (e.g., Apache, Nginx)
- PHP 7.4 or higher
- MySQL or any other relational database

### Steps
1. Clone the repository:
    ```sh
    git clone https://github.com/your-username/startup-freelancer-platform.git
    ```
2. Navigate to the project directory:
    ```sh
    cd startup-freelancer-platform
    ```
3. Set up the database:
    - Create a new database.
    - Import the provided SQL file to set up the required tables.
    ```sh
    mysql -u your_username -p your_database < database.sql
    ```
4. Configure the database connection:
    - Open `config.php` and update the database connection details.
    ```php
    <?php
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database";
    ?>
    ```
5. Deploy the project to your web server's root directory:
    - If using Apache, place the project files in the `htdocs` directory.
    - If using Nginx, update the server block configuration to point to the project directory.
6. Open your browser and navigate to the project URL:
    ```sh
    http://localhost/startup-freelancer-platform
    ```

## Usage

### For Freelancers
- Sign up and create a profile.
- Browse job listings and apply for suitable positions.
- Connect with ambassadors for guidance and networking.

### For Startups
- Sign up and create a company profile.
- Post job openings and review freelancer applications.
- Hire freelancers with the required skills and expertise.

## Contribution
Feel free to contribute to this project by opening issues and submitting pull requests. Contributions are welcome and greatly appreciated.
