# MVC Tracker Project

## Description
This is a simple MVC (Model-View-Controller) project for tracking courses and assignments. It allows you to manage courses and assignments through a web interface.

## Project Structure
- **index.php**: Entry point of the application. It handles all requests using a switch statement to determine the appropriate action.
- **model**: Contains the database models for courses and assignments.
  - **database.php**: Database connection setup.
  - **course_database.php**: Class for interacting with the courses table.
  - **assignment_database.php**: Class for interacting with the assignments table.
- **view**: Contains the view files (HTML templates) for displaying courses and assignments.
  - **header.php**: Header template.
  - **footer.php**: Footer template.
  - **error.php**: Error page template.
  - **course_list.php**: Template for displaying a list of courses and handling actions like add and delete.
  - **assignment_list.php**: Template for displaying a list of assignments and handling actions like add and delete.

## Setup
1. Clone the repository to your local machine `git clone https://github.com/haweil/MVC-assignment-tracker`.
2. Import the database schema from schema.sql to create the necessary tables.
3. Update the database connection settings in model/database.php if necessary.

## Usage
1. Access the application through your web browser.
2. Use the navigation links to view, add, edit, or delete courses and assignments.

## Course Reference
This project was learned and implemented based on the course [link](https://www.youtube.com/watch?v=Rkg731t47dc&t=1s&ab_channel=DaveGray) 
