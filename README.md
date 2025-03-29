# Heat the House - SOLID Principles Practice

This is an educational project demonstrating SOLID principles implementation in PHP. The project simulates a house heating system with various components interacting with each other.

## Project Description

The project implements a house heating system with the following domains:
- House: Main domain representing the house that needs to be heated
- Stove: Heating device that burns fuel to produce heat
- Fuel: Different types of fuel that can be used for heating
- Forest: Source of wood fuel
- Market: Place to buy fuel
- Timeline: Time management system for the heating process

## Requirements

- PHP 8.3+
- Composer
- PHPUnit 10.5+ (for testing)

## Installation

1. Clone the repository:
```bash
git clone [repository-url]
```

2. Install dependencies:
```bash
composer install
```

## Project Structure

```
app/
└── Domains/          # Domain-specific logic
    ├── House/        # House domain
    ├── Stove/        # Stove domain
    ├── Fuel/         # Fuel domain
    ├── Forest/       # Forest domain
    ├── Market/       # Market domain
    └── Timeline/     # Timeline domain
```

## Development Guidelines

- Follow PSR-12 coding standards
- Use strict typing
- Implement proper error handling
- Write unit tests
- Use dependency injection
- Follow SOLID principles:
  - Single Responsibility Principle
  - Open/Closed Principle
  - Liskov Substitution Principle
  - Interface Segregation Principle
  - Dependency Inversion Principle

## Testing

Run the test suite:
```bash
./vendor/bin/phpunit
```

## License

This project is licensed under the MIT License. 