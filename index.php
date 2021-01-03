<?php
require_once "Show.php";
$result = new Show();
$result->showClasses();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script
            src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
</head>
<body>
<div>
    <p>-------------Task8----------</p>
    <p class="startArray-task8"></p>
    <p class="task8"></p>
</div>
<div>
    <p>-------------Task9----------</p>
    <p class="startArray-task9"></p>
    <p class="task9"></p>
</div>
<div>
    <p>-------------Task10----------</p>
    <p>Delegated events have the advantage that they can process events from descendant elements that are added to the
        document at a later time. We need to change on $(document).on( "click","button", function()</p>
    <button>Click</button>
    <div class="html"></div>
</div>
<div>
    <p>-------------Task11----------</p>
    <p>each time we click on that button, the number inside the badge will increase by 1.</p>
    <div class="p-4">
        <button type="button" class="btn btn-primary">
            +1 <span class="badge badge-light">0</span>
        </button>
    </div>
</div>

<script type="text/javascript" src="script.js"></script>
</body>
</html>
