<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Delete Appointment</title>
        <link rel="Stylesheet" href="styles/appoint.css">
        
        <script src="myScript.js"></script>
       
        
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
        
    </head>

    <body>
        <div class="container">
            <div class="content">
                <div class="right-side">
                    <div class="ftopic">Delete an Appointment</div>
                    <p>Please fill all entries</p>
                
                     <form method="post" action="appdelete.php">
                        <div class="ibox">
                            <input type="text" name="ano" placeholder="Appointment No" >
                        </div>


                        <div class="ibox">
                            <input type="text" name="cid" placeholder="Enter your Client ID">
                        </div>

                        <label for="confirm deletion" name="confirm deletion">
                            <input id="confirm deletion" type="checkbox" required name="confirm deletion" class="inline" onclick="enableBtn();"/> Confirm Deletion
                        </label><br>
                        
                        <div class="button">
                            <input type="submit"  value="Delete">
                        </div>

                        
                    </form>
                </div>
               
            </div>
        </div>




    </body>
    
