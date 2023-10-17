<!DOCTYPE html>
<html>

<body>
    <h1>Lab 8</h1>
    <!-- question a) -->
    <h3>Question a)</h3>
    <script>
        for ($i = 1; $i <= 10; $i++) {
            document.write($i + " ");
        }
    </script>
    <br>
    <br>

    <!-- question b)-->
    <h3>Question b)</h3>
    <button type="button" name="red" onclick="setBgColor('darkred')">DarkRed</button>
    <button type="button" name="blue" onclick="setBgColor('darkblue')">DarkBlue</button>
    <button type="button" name="red" onclick="setBgColor('pink')">Pink</button>


    <script>
        document.bgColor = "grey";

        function setBgColor(color) {
            document.bgColor = color;
        };
    </script>
    <br>

    <!-- question d)-->
    <h3>Question d)</h3>

    <button type="button" onclick="questionD()">click to start question d</button>


    <script>
        function questionD() {
            var text = prompt("Please enter the a sentence", "hello world");
            var word = text.split(" ");
            for (i = 0; i < word.length; i++) {
                document.write(word[i] + "<br>");
            }


        }
    </script>

    <h3>question e)</h3>
    <script>
        let mysql = require("mysql");

        let connection = mysql.createConnection({
            host: "host",
            user: "x",
            pswd: "x",
            dbnm: "x"

        });


        class person {
            constructor() {
                var name;
                var email;
            }

            print() {
                document.write("name: " + name + " | email: " + email);
            }
        }

        function addPerson() {
            var name = prompt("Please enter the name", "");
            var email = prompt("Please enter the email", "");

            var p = new person(name, email);

            p.print;

        }

        function printPerson(p) {
            p.print;
        }
    </script>

    <button type="button" onclick="addPerson()">add new person</button>
    <button type="button" onclick="printPerson()">show person infor</button>

</body>

</html>