<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
  * {
    box-sizing: border-box;
}

body {
    font-family: Arial;
    margin: 0 auto; /* Center website */
    max-width: 800px; /* Max width */
    padding: 20px;
}

.heading {
    font-size: 25px;
    margin-right: 25px;
}

.fa {
    font-size: 25px;
}

.checked {
    color: orange;
}

/* Three column layout */
.side {
    float: left;
    width: 15%;
    margin-top: 10px;
}

.middle {
    float: left;
    width: 70%;
    margin-top: 10px;
}

/* Place text to the right */
.right {
    text-align: right;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* The bar container */
.bar-container {
    width: 100%;
    background-color: #f1f1f1;
    text-align: center;
    color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
    .side, .middle {
        width: 100%;
    }
    /* Hide the right column on small screens */
    .right {
        display: none;
    }
}
</style>
<body>
<span class="heading">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>


</body>
</html>





<!-- Add icon library -->


