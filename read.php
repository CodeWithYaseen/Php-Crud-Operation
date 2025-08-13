<?php
$con = mysqli_connect("localhost", "root", "", "crud_db");
if (isset($_REQUEST['delBtn'])) {
    $delBtn = $_REQUEST['delBtn'];
    $delQuery = "DELETE FROM `registration` WHERE id = $delBtn";
    mysqli_query($con, $delQuery);
    header("Location: read.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        thead {
            background: #4CAF50;
            color: white;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f1f1f1;
        }

        .btn-group {
            display: flex;
            gap: 6px;
            justify-content: center;
            flex-wrap: wrap;
        }

        button {
            padding: 6px 12px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        button[name="delBtn"] {
            background: #e74c3c;
            color: white;
        }

        button[name="delBtn"]:hover {
            background: #c0392b;
        }

        .edit-btn {
            background: #3498db;
            color: white;
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 4px;
            display: inline-block;
        }

        .edit-btn:hover {
            background: #2980b9;
        }

        /* ===== Responsive Design ===== */
        @media (max-width: 768px) {
            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
                width: 100%;
            }

            thead {
                display: none;
            }

            tr {
                margin-bottom: 15px;
                background: white;
                border: 1px solid #ddd;
                border-radius: 6px;
                padding: 10px;
            }

            td {
                text-align: left;
                padding-left: 50%;
                position: relative;
                border: none;
                border-bottom: 1px solid #eee;
            }

            td::before {
                position: absolute;
                left: 10px;
                width: 45%;
                white-space: nowrap;
                font-weight: bold;
                color: #555;
            }

            td:nth-of-type(1)::before {
                content: "Id";
            }

            td:nth-of-type(2)::before {
                content: "Name";
            }

            td:nth-of-type(3)::before {
                content: "Email";
            }

            td:nth-of-type(4)::before {
                content: "Password";
            }

            td:nth-of-type(5)::before {
                content: "Phone";
            }

            td:nth-of-type(6)::before {
                content: "Gender";
            }

            td:nth-of-type(7)::before {
                content: "Action";
            }
        }
    </style>
</head>

<body>
    <h2>Registration Records</h2>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!$con) {
                echo "<tr><td colspan='7'>Error: Database not Connected</td></tr>";
            }
            $query = "SELECT * FROM `registration`";
            $data = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($data)) {
                $id = $row['id'];
                $getName = $row['name'];
                $getEmail = $row['email'];
                $getPassword = $row['password'];
                $getPhone = $row['phone'];
                $gender = $row['gender'];
                $getGen = ($gender === "0") ? "Female" : "Male";

                echo "
                <tr>
                    <td>$id</td>
                    <td>$getName</td>
                    <td>$getEmail</td>
                    <td>$getPassword</td>
                    <td>$getPhone</td>
                    <td>$getGen</td>
                    <td>
                        <div class='btn-group'>
                            <form method='get'>
                                <button name='delBtn' value='$id'>Delete</button>
                            </form>
                            <a href='edit.php?id=$id' class='edit-btn'>Edit</a>
                        </div>
                    </td>
                </tr>
                ";
            }
            ?>
        </tbody>
    </table>
</body>

</html>
