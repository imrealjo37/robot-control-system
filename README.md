# 🤖 Robot Control System 🚀

An interactive system for controlling a robot's movements using a web-based interface. The project combines frontend, backend, and database technologies for a seamless and functional robotics control experience.

---

## ✨ Features

- 🕹️ **Interactive Control Panel**: Allows issuing commands such as `Forward`, `Backward`, `Left`, `Right`, and `Stop`.
- 🗂️ **Database Logging**: Tracks all movement commands in a MySQL database for future reference.
- 📜 **Data Retrieval**: Displays the latest movement command via the [`last_direction.php`](/last_direction.php) page.
- 🎨 **Stylized UI**: A pixel-art-inspired design for an engaging user experience.

---

## 🛠️ Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Server**: XAMPP (Apache)

---

## 🚀 How It Works

1. **Control Panel**: Use the buttons on the web interface to send movement commands.
2. **Database Logging**: Each command is stored in the `directions` table in MySQL.
3. **Last Command Retrieval**: The latest movement command is retrieved and displayed via [`last_direction.php`](/last_direction.php)`.

---
## 📸 Screenshots

### 🎮 User Interface
![Screenshot 2025-01-24 223918](https://github.com/user-attachments/assets/13128ab2-fff7-42a1-9907-0e48d6109c32)


### 📜 Last Direction Output
![Screenshot 2025-01-24 224750](https://github.com/user-attachments/assets/c6fa8405-12d4-4be7-908e-453b4aab4a67)



## 📂 Project Structure

```
.
├── index.html           # Main user interface for robot control
├── store_direction.php  # PHP script to save directions to MySQL
├── last_direction.php   # PHP script to retrieve the latest command
└── robot_control.sql    # SQL script to set up the database
```
---

## 👤 Author
Created by Jood. Feel free to contribute or suggest improvements to the project!
