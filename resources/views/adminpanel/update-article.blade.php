
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    @include('adminpanel.admin_partial.dash-link')

<style>

body {
  font: normal 18px/1.5 "Fira Sans", "Helvetica Neue", sans-serif;
  background: #3AAFAB;
  color: #fff;
  padding: 50px 0;
}

.container {
  width: 80%;
  max-width: 1200px;
  margin: 0 auto;
}

.container * {
  box-sizing: border-box;
}

.flex-outer,
.flex-inner {
  list-style-type: none;
  padding: 0;
}

.flex-outer {
  max-width: 800px;
  margin: 0 auto;
}

.flex-outer li,
.flex-inner {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
}

.flex-inner {
  padding: 0 8px;
  justify-content: space-between;  
}

.flex-outer > li:not(:last-child) {
  margin-bottom: 20px;
}

.flex-outer li label,
.flex-outer li p {
  padding: 8px;
  font-weight: 300;
  letter-spacing: .09em;
  text-transform: uppercase;
}

.flex-outer > li > label,
.flex-outer li p {
  flex: 1 0 120px;
  max-width: 220px;
}

.flex-outer > li > label + *,
.flex-inner {
  flex: 1 0 220px;
}

.flex-outer li p {
  margin: 0;
}

.flex-outer li input:not([type='checkbox']),
.flex-outer li textarea, select {
  padding: 15px;
  border: none;
}

.flex-outer li button {
  margin-left: auto;
  padding: 8px 16px;
  border: none;
  background: #333;
  color: #f2f2f2;
  text-transform: uppercase;
  letter-spacing: .09em;
  border-radius: 2px;
}

.flex-inner li {
  width: 100px;
}




</style>

</head>
<body>
@include('adminpanel.admin_partial.dash-sidebar')


<div class="container">
  <form method="POST" action="update-article-data.php">
    <ul class="flex-outer">
      <li>
        <label for="first-name">Name</label>
        <input type="text" id="name" name="name" value="{{$articles->name}}">
      </li>
      <li>
        <label for="last-name">Author Name</label>
        <input type="text" id="aname" name="aname" value="{{$articles->aname}}">
      </li>
      <li>
        <label for="email">Designation</label>
        <input type="text" id="designation" name="designation" value="{{$articles->designation}}">
      </li>

      <li>
        <label for="email">DIO</label>
        <input type="text" id="doi" name="doi" value="{{$articles->doi}}">
      </li>

      <li>
        <label for="email">Page No</label>
        <input type="text" id="page" name="page" value="{{$articles->page}}">
      </li>
    


      <li>
        
      <input type="hidden" name="id" value="{{$articles->id}}">
      
      <li>
        <button type="submit" name="submit">Update Details</button>
      </li>
    </ul>
  </form>

  <br><br><br><br><br><br><br><br>

  <form action="update-article-data.php" method="post" enctype="multipart/form-data">
  <ul class="flex-outer">
    <li>
    <label for="phone">Change File</label>
    <input type="file" name="file">
    <input type="hidden" name="id" value="{{$articles->id}}">
    <button type="submit" name="img-file">Change Image</button>
    </li>
    </ul>
  </form>



</div>



@include('adminpanel.admin_partial.dash-bottom')

</body>
</html>