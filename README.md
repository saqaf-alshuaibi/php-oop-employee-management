# PHP Core OOP - Employee Management Architecture 🧪

A pure, server-side execution lab engineered to demonstrate robust Object-Oriented Programming (OOP) concepts, strict class architectures, and clean code principles in **Core PHP**. This project focuses entirely on backend structural logic, interface segregation, and scalable class hierarchies without external framework overhead.

## 🛠️ Architecture & Programming Standards
- **Paradigm:** Strict Object-Oriented Programming (OOP)
- **Design Concepts:** Inheritance, Encapsulation, Abstract Classes, and Interface Implementation.
- **Standards:** Clean code practices with strict validation scopes inside setters and encapsulated state control.

## ⚙️ Structural Breakdown
- **Abstract Layer (`Employee.php`):** Implements core interfaces and acts as the central blueprint for multi-type object scaling.
- **Polymorphism & Implementation (`ContractEmp`, `FullTimeEmp`, `PartTimeEmp`):** Concrete classes inheriting core traits while maintaining dynamic logic behaviors (e.g., fluid hourly-salary mutations vs fixed monthly parameters).
- **Interface Segregation (`EmployeeInterface`, `DetailsInterface`):** Strict operational decoupling ensuring that core transactional methods are separate from visual execution models.
- **Process Engine (`empProcess.php`):** A decoupling controller using type-hinted interfaces to map dynamic collections, safely evaluating polymorphic methods to compute organizational payloads.
