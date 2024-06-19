# Scalable and Secure Sports Club E-Commerce Platform

## Project Overview

The primary objective of this project is to develop a safe, scalable, and high-performing web platform for a sports club to sell sports-related merchandise. The platform aims to provide a user-friendly and secure online shopping experience while leveraging cloud services to ensure optimal performance and scalability.

## Team Members

- Heet Gala – hgala02@syr.edu
- Abhishek Shinde – ashinde@syr.edu
- Divyaraj Sarvaiya – dvsarvai@syr.edu

## Project Objectives

The key objectives are as follows:

- **Create a visually appealing and responsive website** for showcasing and selling sports merchandise. This includes designing an intuitive user interface, implementing responsive design techniques, and ensuring cross-browser compatibility.
- **Implement robust security measures** to protect user information and financial transactions. This involves implementing industry-standard security protocols such as HTTPS, data encryption, secure authentication mechanisms, and regular security audits.
- **Utilize cloud services** to achieve high availability, scalability, and efficient resource management. By leveraging cloud infrastructure, the platform can easily scale resources up or down based on demand, ensuring optimal performance during peak traffic periods, and minimizing costs during low traffic periods.
- **Database Management with Azure Data Studio**: Use Azure Data Studio to design and manage the database schema, create tables for storing product and user data, and define relationships between different entities. Complex queries required for retrieving and manipulating data were developed and optimized using Azure Data Studio's query execution and performance tuning tools.
- **Implement user authentication and authorization mechanisms** for secure access and account management. This includes features such as user login, password reset, and role-based access control to ensure that users can only access and perform authorized actions.

## Configuration of Cloud Services

### Azure Monitor / Log Analytics
- **Log Analytics**: Collect, analyze, and query log data from various sources, including applications and services.
- **Metric Data**: Used for monitoring performance, resource utilization, and other metrics.
- **Diagnostic Logs**: Generated logs and diagnostic data analyzed for troubleshooting, auditing, or monitoring purposes.

### Azure SQL Server
- **Azure SQL Database**: Deployed using Azure Data Studio to host the relational database for the e-commerce platform, serving as the repository for crucial data such as user information, product details, and order data. Benefits include automated backups, automatic failover mechanisms, and scalability features.

### Azure Data Studio
- **Database Configuration**: Select appropriate performance tiers and service levels. Implement data encryption at rest and in transit, along with auditing and threat detection functionalities.

### Azure Web App
- **Web App Service**: A fully managed platform that supports multiple programming languages, enabling quick and efficient build, deployment, and scaling of web applications. The platform handles tasks such as provisioning servers, deploying code, and load balancing.

## Tasks Completed

- **Front-end Development**: Designed the login and registration pages using HTML, CSS, and JavaScript.
- **Thorough Testing**: Extensively tested the login and registration pages, hosted on Azure Virtual Machine and containers within the Azure environment.
- **Client-side Form Validation**: Implemented techniques to validate the information users input into our forms.
- **Responsive Design**: Designed to adapt to different screen sizes and devices.
- **Branding Consistency**: Styled front-end pages to match the sports club's branding and design guidelines.

## Issues Encountered

### Integration of Azure SQL Database
Challenges included mapping database schemas to application requirements, implementing efficient data storage and retrieval mechanisms, and establishing secure connections between the application and the database.

### Deployment Coordination
Managing the deployment of multiple cloud services across different Azure resources posed challenges, including coordinating the deployment of Azure VMs, SQL Database instances, and other cloud services to ensure seamless integration and functionality.

## Lessons Learned

- **Understanding Cloud Services**: Investing time in learning and understanding cloud technologies to effectively leverage them for the project.
- **Secure Database Integration**: Following best practices for secure database integration, such as proper input validation and encryption, to ensure data security and compliance with regulations like GDPR.

## Architecture Diagram

![Architecture Diagram](path-to-architecture-diagram)

## U/I Front end

### Login page
![Login Page](path-to-login-page-image)

### Register page
![Register Page](path-to-register-page-image)

### Employee login page
![Employee Login Page](path-to-employee-login-page-image)

### Add stock / products page
![Add Stock / Products Page](path-to-add-stock-products-page-image)

### Home page
![Home Page](path-to-home-page-image)

### Cart page
![Cart Page](path-to-cart-page-image)

### Payment page
![Payment Page](path-to-payment-page-image)

### Logs custom email alert
![Logs Custom Email Alert](path-to-logs-custom-email-alert-image)

### Data tables
![Data Tables](path-to-data-tables-image)

## Scripts / Code

### Login file
```python
# Sample code for login functionality
