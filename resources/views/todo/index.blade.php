<!DOCTYPE html>
<html>
<head>
    <title>TO-DO App</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .task {
            width: 300px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 10px;
            padding: 10px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Function to update the TODO list on the page
        function updateTodoList(todos) {
            var container = $('.container');
            container.empty();
            
            todos.forEach(function(todo) {
                var task = $('<div>').addClass('task').text(todo);
                container.append(task);
            });
        }

        // Function to handle the TODO form submission
        function addTodo() {
            var todoInput = $('input[name="todo"]');
            var todo = todoInput.val();
            
            if (todo !== '') {
                var todos = JSON.parse(localStorage.getItem('todos')) || [];
                todos.unshift(todo);
                localStorage.setItem('todos', JSON.stringify(todos));
                updateTodoList(todos);
                todoInput.val('');
            }
        }

        // Function to handle clearing the TODO list
        function clearTodoList() {
            localStorage.removeItem('todos');
            updateTodoList([]);
        }

        // Function to handle the session expiration/reset
        function resetSession() {
            localStorage.removeItem('todos');
            updateTodoList([]);
        }

        // Initialize the TODO list on page load
        $(document).ready(function() {
            var todos = JSON.parse(localStorage.getItem('todos')) || [];
            updateTodoList(todos);
            
            // Set the session timeout duration (in milliseconds)
            var sessionTimeout = 10000; // 10 seconds
            
            // Reset session after the specified duration of inactivity
            var sessionTimer = setTimeout(resetSession, sessionTimeout);
            
            // Reset session when the user interacts with the page
            $(document).on('click keydown', function() {
                clearTimeout(sessionTimer);
                sessionTimer = setTimeout(resetSession, sessionTimeout);
            });
            // Listen for window unload event (tab closed, refresh, etc.)
            $(window).on('beforeunload', function() {
            localStorage.removeItem('todos');
            });
        });
    </script>
</head>
<body>
    <h1>TO-DO List</h1>

    <form>
        <input type="text" name="todo" placeholder="Enter a new task" required>
        <button type="button" onclick="addTodo()">Add</button>
        <button type="button" onclick="clearTodoList()">Clear List</button>
    </form>

    <div class="container"></div>
 
</body>
</html>
