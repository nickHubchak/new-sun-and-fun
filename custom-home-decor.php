<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Custome Home Decor</title>
  </head>
  <body>
    <div class="container">
        <div style ="text-align: center">
            <h1>Request Custom Home Decor</h1>
            <p>Description/Instructions</p>
            <div class="contact-box">
                <form action="contact">
                    <!-- first name input-->
                    <label for="fName">First Name</label>
                    <input type="text" name="firstName" id="fName" placeholder="Enter Your First Name">
                    <br>
                    <!-- last name input-->
                    <label for="lName">Last Name</label>
                    <input type="text" name="lastName" id="lName" placeholder="Enter Your Last Name">
                    <br>
                    <!-- email input-->
                    <label for="email">Email Address</label>
                    <input type="text" name="emailAd" id="email" placeholder="Enter Your Email Address">
                    <br>
                    <!-- phone number input-->
                    <label for="number">Phone Number</label>
                    <input type="text" name="phoneNum" id="phone" placeholder="Enter Your Phone Number">
                    <br>
                    <!-- description input-->
                    <label for="description">Description</label>
                    <textarea id="desc" name="description" placeholder="Write a description of what you want to sell" style="width:50%"></textarea>
                    <br>
                    <br>
                    <input type="submit" Value="Submit"/>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>
