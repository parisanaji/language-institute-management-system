# Language Institute Management System

## 📌 Overview
This project is a web-based Language Institute Management System designed to facilitate the administration of educational processes in language institutes.

The system provides an integrated platform for administrators, instructors, and students to manage courses, communication, evaluations, and educational content efficiently.

The application is developed using PHP with MVC architecture and CodeIgniter framework, along with HTML, CSS, Bootstrap, and jQuery for the frontend.

## 🚀 Features

- Multi-user system (Admin, Instructor, Student, Guest)
- Online registration system
- Student–Instructor messaging system
- Course and grade management
- News and articles management
- Educational videos management
- Tuition and financial tracking

## 🏗️ System Architecture

The system follows the MVC (Model-View-Controller) architecture:

- Model: Handles database operations (MySQL)
- View: User interface (HTML, CSS, Bootstrap)
- Controller: Business logic (PHP CodeIgniter)

## 📊 UML Diagrams 

### Use Case - Admin
![Admin Use Case](images/usecase/usecase_manager.png)

### Use Case - Student
![Student Use Case](images/usecase/usecase_student.png)

### Use Case - Instructor
![Instructor Use Case](images/usecase/usecase_teacher.png)

### Sequence Diagrams

- Admin Login  
![Admin Login](images/diagram/manager-login.png)

- Delete Student  
![Delete Student](images/diagram/M-delete-student.png)

- Edit Instructor  
![Edit Instructor](images/diagram/M-edit-teacher-info.png)

- Manage Vocabulary  
![Vocabulary](images/diagram/M-add-vocab.png)

- Manage Articles  
![Articles](images/diagram/M-add-article.png)

- Enter Grades  
![Grades](images/diagram/T-insert-mark.png)

- Edit Student Profile  
![Profile](images/diagram/S-edit-profile.png)

- Messaging  
![Messaging](images/diagram/S-chat-with-teacher.png)

- View Grades  
![View Grades](images/diagram/S-show-marks.png)




## 🖥️ Application Screenshots

### Registration Page
![Register](images/diagram/signup-form.png)

### Home Page
![Home](images/manager/homepage.JPG)

### Admin Dashboard
![Admin](images/manager/manager-desktop.JPG)

### Manage Teachers
![Teachers](images/manager/teacher-manager.JPG)

### Manage Students
![Students](images/manager/student-manager.JPG)

### Articles Management
![Articles](images/manager/article-manager.JPG)

### Educational Videos
![Videos](images/manager/movie-manager.JPG)

### Daily Vocabulary
![Vocabulary](images/manager/vocab-manager.JPG)

### Student Panel
![Student Panel](images/manager/profile-manager.JPG)

### Grades
![Grades](images/student/marks.JPG)

### Tuition
![Tuition](images/manager/paymment-manager.JPG)

### Messaging System
![Messages](images/manager/comment-manager.JPG)


## 🛠️ Technologies Used

- PHP (CodeIgniter Framework)
- MySQL
- HTML, CSS
- Bootstrap
- JavaScript / jQuery
- XAMPP (Local Server)


## ⚙️ Installation

1. Clone the repository:
git clone https://github.com/parisanaji/language-institute-management-system.git

2. Move project to XAMPP htdocs folder

3. Import database into MySQL

4. Configure database in:
application/config/database.php

5. Run project:
http://localhost/project-folder


## 🔮 Future Improvements

- Online classes integration
- Multi-branch support
- Advanced reporting system

## 👩‍💻 Author

Parisa Naji  
Bachelor of Computer Engineering (Software)



