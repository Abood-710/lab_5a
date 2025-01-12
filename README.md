# Lab 5a: Server-Side Scripting (PHP)

This repository contains the solutions for **Lab 5a** of the Web Development course (BIC21203). The tasks demonstrate server-side scripting using PHP, including dynamic HTML generation, handling associative arrays, and creating reusable PHP functions.

## Table of Contents
1. [Overview](#overview)
2. [Tasks](#tasks)
    - [Task 1: Display User Details](#task-1-display-user-details)
    - [Task 2: Associative Array](#task-2-associative-array)
    - [Task 3: Multiplication Table Function](#task-3-multiplication-table-function)
3. [How to Run](#how-to-run)
4. [Output Examples](#output-examples)
5. [Repository Structure](#repository-structure)
6. [Author](#author)

---

## Overview
This lab explores server-side scripting techniques using PHP to dynamically generate content on web pages. The tasks include:
- Displaying user-specific details in an HTML table.
- Using associative arrays and loops to dynamically populate HTML tables.
- Creating and using PHP functions to generate multiplication tables.

---

## Tasks

### Task 1: Display User Details
- File: `lab5a_q1.php`
- Description: A PHP script that displays user details (name, matric number, course, year of study, and address) dynamically in an HTML table.

### Task 2: Associative Array
- File: `lab5a_q2.php`
- Description: A PHP script that uses an associative array to store student details and dynamically generates an HTML table to display the data.
- Example Output:
    | Name                 | Matric   | Course     | Year |
    |----------------------|----------|------------|------|
    | Abdullah Al-Rumaithah | AI200353 | Web        | 3    |
    | Ali Ahmed           | AI200354 | Networking | 2    |
    | Sara Hassan         | AI200355 | AI         | 4    |

### Task 3: Multiplication Table Function
- File: `lab5a_q3.php`
- Description: A PHP function named `multiplication` that generates a multiplication table for a given number (1-12). The results are displayed in an HTML table with columns for the number, multiplier, and answer.
- Example Output:
    | No | Multiplier | Answer |
    |----|------------|--------|
    | 1  | 5          | 5      |
    | 2  | 5          | 10     |
    | ...| ...        | ...    |
    | 12 | 5          | 60     |

---

## How to Run
1. Clone this repository to your local machine.
2. Copy the files to the `htdocs` directory in XAMPP.
3. Start the Apache server in XAMPP.
4. Open your browser and navigate to:
    - `http://localhost/lab_5a/lab5a_q1.php` (Task 1)
    - `http://localhost/lab_5a/lab5a_q2.php` (Task 2)
    - `http://localhost/lab_5a/lab5a_q3.php` (Task 3)

---

## Output Examples
Screenshots of the output are included in the submission report.

---

## Repository Structure
```
lab_5a/
├── lab5a_q1.php    # Displays user details dynamically in an HTML table.
├── lab5a_q2.php    # Displays student data using an associative array and a foreach loop.
├── lab5a_q3.php    # Generates and displays a multiplication table using a PHP function.
```

---

## Author
**Abdullah Al-Rumaithah**  
Matric Number: AI200353  
Course: Web Development  
Year of Study: 3  
