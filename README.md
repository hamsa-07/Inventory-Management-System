# Inventory-Management-System

## Abstract<br>
The Inventory Management System is a comprehensive solution designed to streamline and automate the process of managing inventory for businesses. It provides a user-friendly interface for tracking products, managing suppliers, and handling orders. The system aims to enhance operational efficiency, reduce errors, and provide real-time insights into inventory levels.

## Functionality<br>
1. User Authentication and Authorization: Securely log in and control access based on user roles.<br>
2. Customer Management: Add, view, edit, and remove customer profiles.<br>
3. Category Management: Create, view, update, and delete product categories.<br>
4. Brand Management: Add, view, modify, and remove brands.<br>
5. Supplier Management: Manage supplier profiles through creation, viewing, updating, and deletion.<br>
6. Product Management: Handle product details with creation, viewing, updating, and deletion.<br>
7. Purchase Management: Process, review, update, and delete purchase orders.<br>
8. Order Management: Create, view, update, and cancel customer orders.<br>

## Non-Functionality
1. Multi-language Support: The system does not currently support multiple languages or localization.<br>
2. Mobile Responsiveness: The interface is not optimized for mobile devices or tablets.<br>
3. Integration with External Systems: The system does not integrate with third-party applications such as accounting software or ERP systems.<br>

## ER Diagram
![Screenshot 2024-08-02 225403](https://github.com/user-attachments/assets/7d8b5f09-23b8-4eef-8ad3-f5006f1dde9e)

- Product-Category Relationship:Each product is assigned to a specific category, with multiple products belonging to the same category.<br>
- Product-Brand Relationship:Every product is associated with a single brand, though multiple products can be linked to the same brand.<br>
- Product-Supplier Relationship:A product can be supplied by multiple suppliers, and each supplier can provide multiple products.<br>
- Customer-Order Relationship:Each order is placed by a customer, and a single customer can place multiple orders.<br>
- Order-Product Relationship:An order can include multiple products, and each product can be part of multiple orders.<br>
- Purchase-Product Relationship:Purchases can involve multiple products, and each product can appear in multiple purchase transactions.<br>
- Supplier-Purchase Relationship:Each purchase is made from a specific supplier, but a supplier can be involved in multiple purchase transactions.<br>
- Category-Product Relationship:Each category can contain multiple products, while each product belongs to one category.<br>
- Brand-Product Relationship:A brand can be associated with multiple products, with each product linked to a single brand.<br>
- Order-Customer Relationship:A customer can place multiple orders, with each order being associated with a single customer.<br>

## ScreenShot

### Login Page
  ![1](https://github.com/user-attachments/assets/d88b59cc-c69a-4db1-9265-9e47c4904e52)
### Home page
![Screenshot 2024-08-02 215447](https://github.com/user-attachments/assets/d757b0cf-b581-45fd-8c83-05695680badd)
### Customer Page
![Screenshot 2024-08-02 215506](https://github.com/user-attachments/assets/cf801de9-43e8-48d4-8c68-209308a4040a)
### Category Page
![Screenshot 2024-08-02 215521](https://github.com/user-attachments/assets/70edd446-b5a4-44b0-bde7-fd90008dea99)
### Brand Page
![Screenshot 2024-08-02 215532](https://github.com/user-attachments/assets/b2b4832f-de4a-42bd-889b-ab7529fb79ad)
### Supplier Page
![Screenshot 2024-08-02 215546](https://github.com/user-attachments/assets/9c15b9ed-4f5d-4057-aa37-cf7fb724c54e)
### Product Page
![Screenshot 2024-08-02 215601](https://github.com/user-attachments/assets/fa996809-c3f9-4e5c-aac7-de2487ccbe1d)
### Purchase Page
![Screenshot 2024-08-02 215615](https://github.com/user-attachments/assets/d0df97ee-262b-48f6-ab7d-723524de442a)
### Order Page
![Screenshot 2024-08-02 215631](https://github.com/user-attachments/assets/8bf3afbd-6350-4b1c-81bc-a4a517a65ddc)

## Getting Started
### 1. Clone the Repository<br>
**git clone https://github.com/yourusername/Inventory-Management-System.git**<br>

### 2. Set Up Environment
- Ensure you have XAMPP or a similar local server setup.<br>

### 3. Configure Database

- Import the provided SQL file into your database to set up the necessary tables.<br>
- Update the database configuration in config.php with your database credentials.<br>

### 4. Run the Application

- Place the project files in the htdocs directory of your XAMPP installation.<br>
- Access the application via http://localhost/Inventory-Management-System in your web browser.<br>
