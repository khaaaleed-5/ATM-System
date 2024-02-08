# ATM System
[![Status](https://img.shields.io/badge/Status-End-brightgreen)](https://github.com/your-username/task-management-system)

## Overview

The ATM System is a secure and sophisticated platform designed to enhance authentication and verification processes within the financial sector. It integrates advanced technologies, including photo print verification, to ensure reliable and trustworthy user identification.

### Software Requirements Specification (SRS)

Our SRS document serves as a guide for the development process, covering the following key aspects:

- **System Overview:** An introduction to the ATM System and its role in the financial ecosystem.
- **Functional Requirements:** Detailed descriptions of the system's functionalities, including user interactions and system responses.
- **Non-Functional Requirements:** Performance, security, and usability considerations that define the system's characteristics.
- **Use Cases:** Scenarios that describe how users interact with the system and achieve their goals.

The SRS document acts as a roadmap for our development journey, ensuring that our ATM System meets the highest standards of functionality, security, and user experience.

Feel free to explore the [SRS document](https://docs.google.com/document/d/1REhPUTY3REhDIlN-QARpUjZYE9EjkLX-/edit?usp=sharing&ouid=108076421560717707245&rtpof=true&sd=true)) to gain deeper insights into the ATM System project

## Prerequisites

Before you begin, ensure you have the following installed:

- [Database] - The ATM System requires a [database] to store and manage user data.
  - You can find "atm_db.sql" in "ATM\Controllers"

## Key Features

- **Secure Photo Verification:** Utilize cutting-edge image processing to verify user identities through secure photo prints.
- **Fraud Prevention:** Implement sophisticated algorithms to detect and prevent fraudulent activities, ensuring the integrity of financial transactions.
- **User-Friendly Interface:** Intuitive interface for seamless interactions, making it accessible to both customers and banking professionals.
- **Multi-Factor Authentication:** Strengthen security with multi-factor authentication methods to protect sensitive financial data.
- **Audit Trail and Reporting:** Comprehensive audit trail functionality for transparency and accountability, with detailed reporting capabilities for regulatory compliance.

## Usage

The ATM System is designed to be user-friendly for both customers and banking professionals:

- Customers can perform various transactions, including withdrawals, deposits, balance inquiries, and account transfers.
- Banking professionals can monitor and manage transactions, perform system maintenance, and generate reports.


## Project Architecture

The ATM System follows the Model-View-Controller (MVC) architecture, a design pattern that separates the application logic into three interconnected components: Model, View, and Controller.

### Model

The Model represents the data and business logic of the application. In the ATM System, the Model is responsible for managing user accounts, transactions, and the underlying database interactions. It encapsulates the core functionalities and ensures data integrity.

### View

The View is responsible for presenting the user interface and receiving user input. In our ATM System, the View component handles the graphical representation of the ATM interface seen by the users during transactions. It provides an intuitive and user-friendly experience.

### Controller

The Controller acts as an intermediary between the Model and View, handling user inputs, updating the Model, and refreshing the View accordingly. In the ATM System, the Controller interprets user actions, triggers the corresponding operations in the Model, and updates the View to reflect the changes.

This separation of concerns enhances maintainability, scalability, and reusability of the codebase. The use of MVC architecture facilitates modularity and makes it easier to extend or modify individual components without affecting the entire system.

By adopting the MVC pattern, we aim to create a well-organized and maintainable ATM System that promotes clean code practices and ease of development.


## How to Contribute

We welcome contributions! If you'd like to contribute to the ATM System, please follow these steps:

1. Fork the repository
2. Create a new branch (`git checkout -b feature/fooBar`)
3. Make your changes and commit them (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request

