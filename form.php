<!DOCTYPE html>
<html>

<head>
    <title>Multi-Step Patient Details Form</title>
    <!-- Add any necessary CSS stylesheets here -->
</head>

<body>
    <div class="container">
   
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          
                <!-- Step 1: Collect Personal Information -->
                <h2>Step 1: Personal Information</h2>
                <label for="full_name">Full Name:</label>
                <input type="text" id="full_name" name="full_name" required><br>

                <label for="occupation">Occupation:</label>
                <input type="text" id="occupation" name="occupation" required><br>

                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="3"></textarea><br>

                <label for="phone">Phone / Mobile Number:</label>
                <input type="text" id="phone" name="phone" required><br>

                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required><br>

                <label>Gender:</label>
                <input type="radio" name="gender" value="male" required> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="others"> Others<br>

                <input type="submit" value="Next">

                <!-- Step 2: Medical History -->
                <h2>Step 2: Medical History</h2>
                <label for="medical_history">Medical History:</label>
                <textarea id="medical_history" name="medical_history" rows="3" required></textarea><br>

                <label>Diagnosis (check all that apply):</label><br>
                <input type="checkbox" name="diagnosis[]" value="diabetic_retinopathy"> Diabetic Retinopathy<br>
                <input type="checkbox" name="diagnosis[]" value="hypertensive_retinopathy"> Hypertensive Retinopathy<br>
                <input type="checkbox" name="diagnosis[]" value="age_related_macular_degenerations"> Age Related Macular Degenerations<br>
                <input type="checkbox" name="diagnosis[]" value="macular_hole"> Macular Hole<br>
                <input type="checkbox" name="diagnosis[]" value="glaucoma"> Glaucoma<br>
                <input type="checkbox" name="diagnosis[]" value="cataract"> Cataract<br>
                <input type="checkbox" name="diagnosis[]" value="uveitis"> Uveitis<br>

                <input type="submit" value="Next">
        
           

                <input type="submit" value="Confirm and Submit">
            
        </form>
    </div>
</body>

</html>
