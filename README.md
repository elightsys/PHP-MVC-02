# Welcome to the PHP MVC Framework (Step 02) / Datatables with Server-Side (SSP)

## About This Project
This project provides a step-by-step guide to building a custom PHP MVC framework, focusing on integrating DataTables with server-side processing (SSP). It serves as an easy-to-understand MVC skeleton application, designed to teach the basics of the Model-View-Controller (MVC) architecture. The project is free, open-source, and ideal for developers looking to implement dynamic, database-driven tables in their applications.

## Goals of This Project
- Teach developers the fundamentals of the MVC architecture.
- Demonstrate how to integrate DataTables with server-side processing for large-scale datasets.
- Provide a lightweight, customizable framework for PHP developers.

## Recent Updates
### Compatibility with PHP 8.2
The framework has been updated to ensure compatibility with PHP 8.2, incorporating:
- Refactored core files (e.g., `Database.php`, `Bootstrap.php`, and `Pages.php`) for adherence to modern PHP practices.
- Improved error handling and streamlined code execution.
- Enhanced model integration for better scalability and maintainability.

### New Features
- **DataTables Integration:**
  - Bootstrap 4 styling for responsive and modern UI.
  - File export functionality using DataTables Buttons extension (CSV, Excel, PDF, and print options).
- **Server-Side Processing (SSP):**
  - Efficient handling of large datasets with server-side paging, searching, and ordering.
  - Optimized for SQL-based data retrieval, ensuring fast performance even with extensive databases.

## Technologies Used
- **PHP 8.2**: Backend logic and MVC structure.
- **jQuery**: Simplifies DOM manipulation and Ajax calls.
- **Bootstrap 4**: Provides responsive and modern UI design.
- **DataTables**: Advanced table features, including sorting, searching, and pagination.
- **Buttons Extension for DataTables**: Enables file export functionality.

## Live Demo
Explore the live demo of the project:  
[Live Demo](https://mvc.mehet.hu/github/mvc_02/)

## More Details
### DataTables Bootstrap 4 Integration
This integration is achieved by including the DataTables Bootstrap 4 files (CSS and JS), which set the necessary defaults for initializing DataTables seamlessly.

### DataTables File Export
Exporting data from a table is often a key feature of complex applications. The Buttons extension for DataTables supports exporting data to multiple formats, including:
- CSV
- Excel
- PDF
- Print

### Server-Side Processing (SSP)
For applications working with large datasets, server-side processing allows DataTables to:
- Delegate paging, searching, and ordering actions to the server.
- Leverage SQL engines for efficient data management.
- Perform Ajax requests for each table draw, ensuring real-time updates.

## License
This project is licensed under the **MIT License**, allowing free usage and modification for personal or commercial purposes.

