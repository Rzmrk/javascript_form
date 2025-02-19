<html>
    <head>
        <title>Table Form</title>
    </head>
    <body>
        <h1>Student Record</h1>
        <table id="student_record" border="1">
        
        </table>  
        <!-- INTERNAL -->
        <script>
            const studentRecord = document.getElementById("student_record");

            console.log("Hello World");

            const row1 = studentRecord.insertRow();
            const row1col1 = row1.insertCell();
            row1col1.innerHTML = "Last Name";

            const row1col2 = row1.insertCell();
            row1col2.innerHTML = "First Name";

            const row2 = studentRecord.insertRow();
            const row2col1 = row2.insertCell();
            const row2col2 = row2.insertCell();

            const inputLastname = document.createElement("INPUT");
            inputLastname.type = "text";
            inputLastname.placeholder = "Enter Last name";
            row2col1.append(inputLastname);

            const inputFirstname = document.createElement("INPUT");
            inputFirstname.type = "text";
            inputFirstname.placeholder = "Enter First name";
            row2col2.append(inputFirstname);

            const row3 = studentRecord.insertRow();
            const row3col1 = row3.insertCell();
            row3col1.colSpan = 2;
            
            const submitButton = document.createElement("INPUT");
            submitButton.type = "Submit";
            submitButton.value = "Submit";
            row3col1.append(submitButton);

            console.log(studentRecord);
        </script>
    </body>
</html>