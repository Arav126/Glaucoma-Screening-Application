<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='register.css'>

</head>

<body>
    <!-- partial:index.partial.html --> <br>
    <div class="row">
        <section class="section">
            <header>
                <h3>
                    <!-- <div class="svg"> -->
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 329 226.5">
              <path class="st1" id="pupil" d="M164.5 107.6c-16.5 0-29.9 13.4-29.9 29.9s13.4 29.9 29.9 29.9 29.9-13.4 29.9-29.9S181 107.6 164.5 107.6zM164.5 161.3c-13.2 0-23.9-10.7-23.9-23.9s10.7-23.9 23.9-23.9 23.9 10.7 23.9 23.9S177.7 161.3 164.5 161.3z"/>
                   
                   <path class="st1" id="svg19" d="M324.1 136.5c-0.2-0.2-12.9-12.5-32.5-27.4l32.8-43.6c1-1.3 0.7-3.2-0.6-4.2 -1.3-1-3.2-0.7-4.2 0.6l-32.8 43.6c-4.4-3.3-9.2-6.7-14.2-10 -13.9-9.4-27.4-17.2-40.3-23.4l18.4-47.2c0.6-1.5-0.2-3.3-1.7-3.9 -1.5-0.6-3.3 0.2-3.9 1.7L227 69.4c-20.4-9.2-39.4-14.3-57-15.1V5.6c0-1.7-1.3-3-3-3s-3 1.3-3 3v48.5c-19.8 0.1-40.2 5.9-59.1 14.1 0.1-0.5 0.1-1.1-0.1-1.7l-16-44c-0.6-1.6-2.3-2.4-3.8-1.8 -1.6 0.6-2.4 2.3-1.8 3.8l16 44c0.3 0.7 0.7 1.2 1.3 1.6C84 77.7 68.8 86.9 56.3 95.4c-3.3 2.3-6.6 4.5-9.7 6.8 -0.1-0.1-0.1-0.2-0.2-0.3l-30-40c-1-1.3-2.9-1.6-4.2-0.6 -1.3 1-1.6 2.9-0.6 4.2l30 40c0.1 0.1 0.2 0.2 0.2 0.2 -22.1 16.4-36.7 30.6-36.9 30.8 -1.1 1.1-1.2 2.9-0.2 4.1 0.7 0.8 17.8 20.3 46.2 40 47.1 32.8 87.5 39.9 113.3 40 0.1 0 0.2 0 0.3 0 0 0 0.1 0 0.1 0 0.1 0 0.3 0 0.4 0 46.8 0 87.6-21.8 113.6-40 28.1-19.7 45-39.2 45.7-40C325.3 139.4 325.2 137.6 324.1 136.5zM164.7 214.6c-0.3 0-0.6 0-0.8 0 -42.2-0.4-76.5-34.8-76.5-77.1 0-42.5 34.6-77.1 77.1-77.1s77.1 34.6 77.1 77.1C241.6 179.9 207.1 214.5 164.7 214.6zM54.5 175.7c-22.4-15.6-38-31.4-43.3-37 10.1-9.4 54.8-49.3 104.3-68.4 -20.7 15.1-34.2 39.6-34.2 67.1 0 29.8 15.8 56 39.4 70.7C94.2 200.5 71.2 187.4 54.5 175.7zM207.5 208.6c24.1-14.6 40.2-41 40.2-71.1 0-27.5-13.5-52-34.2-67.1 49.5 19.1 94.3 59 104.3 68.4C308.4 148.9 265.3 192.5 207.5 208.6z"/> 
           </svg>  -->

           
           <!-- <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200">
  <circle class="circle" cx="100" cy="100" r="80" stroke="#EDA261" stroke-width="4" fill="none" />
</svg> -->

<!-- 
                    </div> -->


                    <div class="svg-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 329 226.5">
              <path class="st1" id="pupil" d="M164.5 107.6c-16.5 0-29.9 13.4-29.9 29.9s13.4 29.9 29.9 29.9 29.9-13.4 29.9-29.9S181 107.6 164.5 107.6zM164.5 161.3c-13.2 0-23.9-10.7-23.9-23.9s10.7-23.9 23.9-23.9 23.9 10.7 23.9 23.9S177.7 161.3 164.5 161.3z"/>
                   
                   <path class="st1" id="svg19" d="M324.1 136.5c-0.2-0.2-12.9-12.5-32.5-27.4l32.8-43.6c1-1.3 0.7-3.2-0.6-4.2 -1.3-1-3.2-0.7-4.2 0.6l-32.8 43.6c-4.4-3.3-9.2-6.7-14.2-10 -13.9-9.4-27.4-17.2-40.3-23.4l18.4-47.2c0.6-1.5-0.2-3.3-1.7-3.9 -1.5-0.6-3.3 0.2-3.9 1.7L227 69.4c-20.4-9.2-39.4-14.3-57-15.1V5.6c0-1.7-1.3-3-3-3s-3 1.3-3 3v48.5c-19.8 0.1-40.2 5.9-59.1 14.1 0.1-0.5 0.1-1.1-0.1-1.7l-16-44c-0.6-1.6-2.3-2.4-3.8-1.8 -1.6 0.6-2.4 2.3-1.8 3.8l16 44c0.3 0.7 0.7 1.2 1.3 1.6C84 77.7 68.8 86.9 56.3 95.4c-3.3 2.3-6.6 4.5-9.7 6.8 -0.1-0.1-0.1-0.2-0.2-0.3l-30-40c-1-1.3-2.9-1.6-4.2-0.6 -1.3 1-1.6 2.9-0.6 4.2l30 40c0.1 0.1 0.2 0.2 0.2 0.2 -22.1 16.4-36.7 30.6-36.9 30.8 -1.1 1.1-1.2 2.9-0.2 4.1 0.7 0.8 17.8 20.3 46.2 40 47.1 32.8 87.5 39.9 113.3 40 0.1 0 0.2 0 0.3 0 0 0 0.1 0 0.1 0 0.1 0 0.3 0 0.4 0 46.8 0 87.6-21.8 113.6-40 28.1-19.7 45-39.2 45.7-40C325.3 139.4 325.2 137.6 324.1 136.5zM164.7 214.6c-0.3 0-0.6 0-0.8 0 -42.2-0.4-76.5-34.8-76.5-77.1 0-42.5 34.6-77.1 77.1-77.1s77.1 34.6 77.1 77.1C241.6 179.9 207.1 214.5 164.7 214.6zM54.5 175.7c-22.4-15.6-38-31.4-43.3-37 10.1-9.4 54.8-49.3 104.3-68.4 -20.7 15.1-34.2 39.6-34.2 67.1 0 29.8 15.8 56 39.4 70.7C94.2 200.5 71.2 187.4 54.5 175.7zM207.5 208.6c24.1-14.6 40.2-41 40.2-71.1 0-27.5-13.5-52-34.2-67.1 49.5 19.1 94.3 59 104.3 68.4C308.4 148.9 265.3 192.5 207.5 208.6z"/> 
           </svg> 
</div>



                    Register</h3>
                <h4>Please fill your information bellow</h4>
            </header>
            <main>
                <form action="new_register.php" method="post">
                    <div class="form-item box-item">
                        <input type="text" name="name" placeholder="Name" data-required pattern="[a-z]*" required>
                        <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                    </div>
                    <div class="form-item box-item">
                        <input type="email" name="email" placeholder="Email" data-email data-required required>
                        <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                        <small class="errorEmail"><i class="fa fa-asterisk" aria-hidden="true"></i> email is not valid</small>
                    </div>
                    <div class="form-item box-item">
                        <div class="form-item-triple">
                            <div class="radio-label">
                                <label class="label">Gender</label>
                            </div>
                            <div class="form-item">
                                <input id="Male" type="radio" name="gender" value="Male" data-once required>
                                <label for="Male">Male</label>
                            </div>
                            <div class="form-item">
                                <input id="Female" type="radio" name="gender" value="Female" data-once required>
                                <label for="Female">Female</label>
                            </div>
                            <div class="form-item">
                                <input id="Female" type="radio" name="gender" value="Others" data-once required>
                                <label for="Female">Others</label></div>
                        </div>
                        <small class="errorOnce"><i class="fa fa-asterisk" aria-hidden="true"></i> choose at least one</small>
                    </div>
    
                    <div class="form-item box-item">
                        <input type="text" name="address" placeholder="Address" data-required required>
                        <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                    </div>
                    <div class="form-item-double box-item">
                        <div class="form-item ">
                            <input type="text" name="strNumber" placeholder="Str Number" data-required data-number required>
                            <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                            <small class="errorNum"><i class="fa fa-asterisk" aria-hidden="true"></i> must be a number</small>
                        </div>
                        <div class="form-item">
                            <input type="text" name="zCode" placeholder="Zip Code" data-required data-number pattern="[0-9]*" required>
                            <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                            <small class="errorNum"><i class="fa fa-asterisk" aria-hidden="true"></i> must be a number</small>
                        </div>
                    </div>
       
                    <div class="form-item">
                        <!-- <span id="submit" class="submit">Submit</span> -->
                        <span>  <button id="submit" class="submit" > submit </button> </span>
                    </div>
                </form>
            </main>
            <footer>
                <!-- <p>Already have an account? <a href="#">Login here</a></p> -->
            </footer>
            <i class="wave"></i>
        </section>

    </div>
    <canvas class="background"></canvas>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

</body>

</html>