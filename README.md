Mini Project: Plagiarism Detection using Machine Learning + PHP + XAMPP
# Plagiarism Detection System – Mini Project

This is a mini project developed in the 2nd year (4th semester) at **K. Ramakrishnan College of Engineering**, Department of AI & ML.

It combines **Machine Learning** and **Web Development** to detect plagiarism between text/code files uploaded by the user.

---

## ⚙️ Technologies Used

- Python (Sklearn, Flask)
- HTML, CSS, PHP
- MySQL (via XAMPP)
- File comparison logic
- Localhost hosting

---

## 📌 Features

- Upload `.txt` or `.py` files to check for similarity  
- Shows **plagiarism percentage**  
- Color-coded result:  
  🟥 Red – 100%  
  🟨 Yellow – 50%  
  🟩 Green – 0%  
- Role-based login: Admin/User  
- Admin panel tracks activity

---

## 🛠 How to Run (Local Only)

1. Install [XAMPP](https://www.apachefriends.org/) and Python (3.8+)
2. Import `plagiarism.sql` into phpMyAdmin
3. Place the PHP files inside `htdocs` folder
4. Run Python Flask API (`python app.py`) for ML backend
5. Open browser and go to `localhost/plagiarism/`

---

## 📄 Files Included

- `report.pdf` – Mini project documentation  
- `/php_ui/` – Frontend system  
- `/flask_api/` – ML logic and backend  
- `/test_files/` – Sample `.py` and `.txt` input  

---

## 🚀 Future Scope

- Host the Flask API on cloud (e.g., Render, PythonAnywhere)  
- Add GitHub code plagiarism support  
- UI enhancements and bulk file checking

---

🎓 Developed by: **Sudharshan M**  
📚 Semester: 4th  
🏫 Institution: K. Ramakrishnan College of Engineering  
🔗 Status: Currently runs on localhost only (not yet hosted online)

