# News Articles (PHP & MySQL)

## 📌 Overview
This project is a **News Articles** built using **PHP & MySQL**. It retrieves and displays news articles from a database, including associated images. The project demonstrates:
- **MySQL Database Integration**
- **PHP for Data Retrieval & Display**
- **HTML & CSS for Formatting**
- **LEFT JOIN for Related Data**
- **Flexbox for Responsive Layouts**

## 🚀 Features
- Fetches **news articles** from the database.
- Uses **JOIN** to retrieve related images.
- Displays **news title, description, authors, and number of reads**.
- Ensures **consistent layout** across all records.
- Protects **special characters** for security.

## 📂 Dataset
In the dataset folder you will find: 
- The original dataset `php-assignment/dataset/News_Category_Dataset_v3.json`
- The formated 40 dataset for news into a csv file `news_data.csv`
- The other generated table `news_images.csv` to join with `news_data.csv`
- The sqll file to create database and the tables `create_news_images_tables.sql`



## 🛠️ Setup Instructions

### **1️⃣ Install XAMPP (or any PHP environment)**
If you don’t have a local PHP setup, install [XAMPP](https://www.apachefriends.org/index.html) and start **Apache & MySQL**.

### **2️⃣ Create MySQL Database**
- Import the SQL file provided (`create_news_images_tables.sql`) to create the required tables.

### **3️⃣ Import Data**
- Use **PHPMyAdmin** or MySQL CLI to import `news_data.csv` and `news_images.csv` into their respective tables.

### **4️⃣ Configure Database Connection**
- Update `connection.php` with your database credentials, you can find it in the reusables folder.

### **5️⃣ Run the Project**
1. Move the project folder to `htdocs` (if using XAMPP).
2. Start **Apache & MySQL**.
3. Open `http://localhost/news-portal/index.php` in your browser.



## 👨‍💻 Author
Developed by **Genevieve Awa**  
📧 Contact: [awavieve@gmail.com]  
🌐 Portfolio: [https://awsactivators.github.io/portfolio/]

## 📜 License
This project is licensed under the **MIT License**. Feel free to use and modify it!
