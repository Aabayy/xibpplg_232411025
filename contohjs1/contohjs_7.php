<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        var d=new Date()
        var weekday=new
        Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
        var montname=new
        Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")
        document.write(weekday[d.getDay()] + " ")
        document.write(d.getDate() + " ")
        document.write(monthname[d.getMonth()] + " ")

        document.write(d.gettimeofday() + " ")
    </script>
</head>
<body>
    
</body>
</html>