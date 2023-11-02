<!DOCTYPE html>
<html>
<head>
    <title>Register Contoh</title>
</head>
<body>
<h2>Register Contoh</h2>
<div class="container">
    <form method="post" action="process.php" onsubmit="return validateForm()">

        <label for="planAction">Plan Action:</label>
        <div id="action-container">
            <div class="action-item">
                <label>User : </label>
                <select name="userid[]">
                    <option value="1">Apih</option>
                    <option value="2">Qama</option>
                    <option value="3">Ahmad</option>
                    <option value="4">Sara</option>
                    <option value="5">Yu</option>
                </select>
            </div>
        </div>
        <button type="button" id="add-action" style="margin-bottom: 10px;">Add Action</button>


        <input type="submit" value="Submit">
    </form>


    <script>
        var actionCounter = 1;


        // Add Action button click event
        document.getElementById('add-action').addEventListener('click', function () {
            var actionContainer = document.getElementById('action-container');
            var actionItem = document.createElement('div');
            actionItem.classList.add('action-item');
            actionItem.innerHTML = `
            <label>User : </label>
                <select name="userid[]">
                    <option value="1">Apih</option>
                    <option value="2">Qama</option>
                    <option value="3">Ahmad</option>
                    <option value="4">Sara</option>
                    <option value="5">Yu</option>
                </select>
            <button type="button" class="cancel-action" style="margin-bottom: 10px; margin-left: 1px;">Cancel Action</button>
        `;
            actionContainer.appendChild(actionItem);
            actionCounter++; // Increment the counter for the next action
        });


        // Cancel Action button click event
        document.getElementById('action-container').addEventListener('click', function (event) {
            if (event.target && event.target.classList.contains('cancel-action')) {
                event.target.parentElement.remove();
            }
        });
    </script>
</div>
</body>
</html>