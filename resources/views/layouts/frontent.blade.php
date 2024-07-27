<html lang="en">

<head>
    <style>
        /* styles.css */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    color: #333;
}
.alert-success {
        color: #0f5132;
        background-color: #d1e7dd;
        border-color: #badbcc;
        text-align: center;
}
.alert {
        margin-top: 20px;
        position: relative;
        padding: 1rem 1rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: .25rem;
}
form {
    width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

input, select, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-bottom: 15px;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
}

#confirmation {
    text-align: center;
    margin-top: 20px;
}

#confirmationNumber {
    font-weight: bold;
}

    </style>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявка на визит</title>
</head>

<body>
         @yield('content')

</body>

</html>