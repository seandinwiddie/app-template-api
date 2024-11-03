# app-template-api.api.sdin.dev

This project is an API for a template application, built with the Laravel framework. It combines the power of Laravel's robust backend capabilities with a flexible API structure for content delivery.

## Description

This project serves as the backend for fetching and providing data to the frontend application. It provides a flexible backend for a portfolio website, allowing easy content updates through JSON files while maintaining a structured API for frontend consumption.

## Main Components

### API Server
- Uses Laravel to create a server
- Implements CORS for cross-origin requests
- Reads initial state from a JSON file
- Provides endpoints for:
  - Homepage
  - Status check
  - Fetching all data
  - Dynamic endpoints for each key in the initial state

### Initial State Data
- Contains structured data for the application, including:
  - BDD (Behavior-Driven Development) tests
  - Brand information
  - Portfolio features
  - Application procedures
  - Theme toggle settings
  - Navigation data

## Dependencies
- CORS for handling cross-origin requests
- Laravel framework and its dependencies
- Additional Laravel packages as specified in composer.json