# Todo Application

A simple and elegant task management system built with PHP and MySQL, featuring a clean and responsive user interface.

## Features

- Add new tasks with a user-friendly form
- Edit existing tasks
- Delete tasks with confirmation
- Responsive design for all devices
- Smooth animations and transitions
- Secure database interactions

## Technologies Used

- **Frontend**: HTML5, CSS3
- **Backend**: PHP
- **Database**: MySQL
- **Styling**: Custom CSS with animations

## File Structure

## Database Schema

The application uses a MySQL database with the following structure:

```sql
CREATE TABLE tasks (
  id INT(11) NOT NULL AUTO_INCREMENT,
  task VARCHAR(255) NOT NULL,
  status ENUM('pending', 'completed') DEFAULT 'pending',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);
```

## Key Components

1. **Database Configuration** (`config/db.php`)

   - Handles MySQL connection
   - Uses mysqli for database interactions
   - Implements basic error handling

2. **Main Interface** (`public/index.php`)

   - Displays all tasks in descending order
   - Features add/edit/delete actions
   - Implements HTML special characters encoding for security

3. **Task Management**

   - **Add Task** (`public/add-task.php`): Form with input validation
   - **Edit Task** (`public/edit-task.php`): Pre-filled form for task updates
   - **Delete Task** (`public/delete-task.php`): Immediate task removal

4. **Styling** (`assets/style.css`)
   - Modern gradient background
   - Smooth animations and transitions
   - Responsive design for mobile devices
   - Hover effects and interactive elements

## Security Features

- Input sanitization using `mysqli_real_escape_string`
- HTML special characters encoding
- Secure database credentials management
- Proper HTTP method validation

## Development Setup

1. Clone the repository
2. Create MySQL database:
   ```bash
   mysql -u root -p -e "CREATE DATABASE todo_app;"
   ```
3. Import database schema:
   ```bash
   mysql -u root -p todo_app < backupDB/todo_app.sql
   ```
4. Update database credentials in `config/db.php`
5. Start local development server:
   ```bash
   php -S localhost:8000 -t public/
   ```

## Roadmap

- [ ] Add user authentication
- [ ] Implement task categories
- [ ] Add due dates and reminders
- [ ] Develop REST API for task management
- [ ] Add dark mode support

## Contributing

Please follow these steps:

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

Distributed under the MIT License. See `LICENSE` for more information.

## Contact

Project Link: [https://github.com/yourusername/todo-app](https://github.com/yourusername/todo-app)
